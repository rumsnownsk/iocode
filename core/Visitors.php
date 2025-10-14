<?php

namespace CoreApp;

class Visitors
{
    public string $ip;
    public string $date;
    public string $user_agent;
    public string $referrer;
    public string $on_page;
    public string $last_visit;

    public int $timeOneDay = 86400;     // 60 * 60 * 24

    public function __construct()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->date = date('d-m-Y H:i:s');
        $this->user_agent = $_SERVER['HTTP_USER_AGENT'];
        $this->referrer = $_SERVER['HTTP_REFERER'];
        $this->on_page = request()->uri;
        $this->run();
    }

    protected function run(): void
    {
        $visitor = db()->query("select * from visitors where ip = ? order by last_visit desc limit 1", [$this->ip])->getOne();

        if ($visitor != null) {

            if (time() - $visitor['last_visit'] > 10 && time() - $visitor['last_visit'] < $this->timeOneDay) {
                $this->updateVisitor($visitor);
            } elseif (time() - $visitor['last_visit'] >= $this->timeOneDay) {
                $this->saveVisitor();
            }

        } else {
            $this->saveVisitor();
        }
    }

    public function saveVisitor(): void
    {
        $queryString = "INSERT INTO visitors (ip, date, user_agent, referrer, last_visit, on_page) values (?, ?, ?, ?, ?, ?)";
        db()->query($queryString, [
            $this->ip,
            $this->date,
            $this->user_agent,
            $this->referrer,
            time(),
            $this->on_page
        ]);
    }

    protected function updateVisitor($visitor): void
    {
        $queryString = "UPDATE visitors SET last_visit = ?, today_visit = ? WHERE ip = ? ORDER BY last_visit DESC LIMIT 1";
        db()->query($queryString, [
            time(),
            (int)$visitor['today_visit'] + 1,
            $visitor['ip']
        ]);
    }
    public function isVisitToday(): bool
    {

    }
}