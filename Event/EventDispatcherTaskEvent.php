<?php
/*
 *    CleverAge/ProcessBundle
 *    Copyright (C) 2017 Clever-Age
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace CleverAge\ProcessBundle\Event;

use CleverAge\ProcessBundle\Model\ProcessState;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class EventDispatcherTaskEvent
 *
 * @package CleverAge\ProcessBundle\Event
 * @author  Madeline Veyrenc <mveyrenc@clever-age.com>
 */
class EventDispatcherTaskEvent extends Event
{
    /**
     * @var ProcessState
     */
    protected $state;

    /**
     * EventDispatcherTaskEvent constructor.
     *
     * @param ProcessState $state
     */
    public function __construct(ProcessState $state)
    {
        $this->state = $state;
    }

    /**
     * @return ProcessState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ProcessState $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}
