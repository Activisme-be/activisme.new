<?php

namespace App\Composers;

use stdClass;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

/**
 * Class KioskComposer.
 */
class KioskComposer
{
    /**
     * Method for getting the dashboard counters for the users.
     *
     * @return stdClass
     */
    private function getUserCounters(): stdClass
    {
        return DB::table('users')
            ->selectRaw('count(*) as total')
            ->selectRaw('count(case when banned_at is not null then 1 end) as deactivated_count')
            ->first();
    }

    /**
     * Method for getting the audit entry counts for the dashboard
     * 
     * @return stdClass
     */
    private function getAuditCounters(): stdClass
    {
        return DB::table('activity_log')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when created_at like '%".date('Y-m-d')."%' then 1 end) as total_today")
            ->first();
    }

    /**
     * Method for getting the system alert counters. 
     * 
     * @return stdClass
     */
    private function getNotificationCounters(): stdClass 
    {
        return DB::table('system_alerts')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when created_at like '%".date('Y-m-d')."%' then 1 end) as total_today")
            ->first();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view The view builder instance.
     * @return void
     */
    public function compose(View $view): void
    {
        $view->with('users', $this->getUserCounters());
        $view->with('audit', $this->getAuditCounters());
        $view->with('notifications', $this->getNotificationCounters());
    }
}
