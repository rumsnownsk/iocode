<?php

namespace CoreApp;

class Visitors
{
    public string $ip_client;
    public string $first_visit;
    public string $user_agent;
    public string $referrer;
    public string $on_page;
    public array $visitor = [];
    public int $timeOneDay = 86400;     // 60 * 60 * 24
    public int $time;

    public function __construct()
    {
        $this->ip_client = $_SERVER['REMOTE_ADDR'];
        $this->first_visit = date('d-m-Y H:i:s');
        $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
        $this->referrer = $_SERVER['HTTP_REFERER'] ?? 'none';
        $this->on_page = request()->uri ?? '';
        $this->time = time() + 25200;   // +7 часов

        $this->run();
    }

    protected function run(): void
    {
        $visitor = db()
            ->query("select * from visitors where ip_client = ? order by last_visit desc limit 1", [$this->ip_client])
            ->getOne();

        if (!$visitor) {
            $this->saveVisitor();
            return;
        }

        $this->visitor = $visitor;

        if ($this->isNewDay()) {
            $this->saveVisitor();
            return;
        }

        if ($this->time - $this->visitor['last_visit'] > 10 && $this->time - $this->visitor['last_visit'] < $this->timeOneDay) {
            $this->updateVisitor($this->visitor);
        } elseif ($this->time - $this->visitor['last_visit'] >= $this->timeOneDay) {
            $this->saveVisitor();
        }
    }

    public function saveVisitor(): void
    {
        $attributes = [
              'last_visit' => $this->time,
              'ip_client' => $this->ip_client,
              'user_agent' => $this->user_agent,
              'first_visit' => $this->time,
              'referrer' => $this->referrer,
              'on_page' => $this->on_page
          ];
        $queryString = "INSERT INTO visitors (last_visit, ip_client, user_agent, first_visit, referrer, on_page)
                            values (:last_visit,:ip_client,:user_agent,:first_visit,:referrer,:on_page)";

        db()->query($queryString, $attributes);
    }

    protected function updateVisitor($visitor): void
    {
        $queryString = "UPDATE visitors SET last_visit = ?, today_visits = ? WHERE ip_client = ? ORDER BY last_visit DESC LIMIT 1";
        db()->query($queryString, [
            $this->time,
            (int)$visitor['today_visits'] + 1,
            $visitor['ip_client']
        ]);
    }

    public function isNewDay(): bool
    {
        $dayVisit = (int)date('d', $this->visitor['last_visit']);
        return $dayVisit !== (int)date('d');
    }

    public function __toString(): string
    {
        if (!Auth::isAuth()) return '';

        $visitors = db()->query('SELECT * FROM visitors order by last_visit desc limit 10')->get();

        for ($i = 0; $i < count($visitors); $i++) {
            $visitors[$i]['first_visit'] = date('d-m-Y H:i', $visitors[$i]['first_visit']);
            $visitors[$i]['last_visit'] = date('d-m-Y H:i', $visitors[$i]['last_visit']);
        }

        return view()->renderPartial('incs/statistic_table', [
            'visitors' => $visitors,
        ]);
    }
}