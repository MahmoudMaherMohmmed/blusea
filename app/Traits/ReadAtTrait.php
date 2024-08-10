<?php

namespace App\Traits;

trait ReadAtTrait
{

    /**
     * Determine whither the message was read.
     *
     * @return bool
     */
    public function read()
    {
        return !!$this->read_at;
    }

    /**
     * Mark the message as read.
     *
     * @return $this
     */
    public function markAsRead()
    {
        if (!$this->read()) {
            $this->forceFill(['read_at' => now()])->save();
        }

        return $this;
    }

    /**
     * Mark the message as unread.
     *
     * @return $this
     */
    public function markAsUnread()
    {
        if ($this->read()) {
            $this->forceFill(['read_at' => null])->save();
        }

        return $this;
    }

    /**
     * Scope the query to include only unread messages.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }
}