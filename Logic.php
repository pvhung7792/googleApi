<?php

class Logic {
	private $client;

	function __construct($client) {
		$this->client = $client;
	}

	function __get($client){
		return $this->client;
	}

	function getCalendars() {
	    return getCalendarList($this->client)['items'];
	}

	/*function putCalendarTitle() {
		global $client;
		$this->putTitle('These are you events for ' . getCalendar($this->client, $_GET['showThisCalendar'])['summary'] . ' calendar:');
	}*/

	function getEventsForCalendar($calendarId) {
	    return getEventList($this->client, $calendarId)['items'];
	}

	function getEventById($eventId, $calendarId) {
	    foreach ($this->getEventsForCalendar($calendarId) as $event)
	        if ($event['id'] == $eventId)
	            return $event;
	}

}

?>
