<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Api\V2010\Account\Queue;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class MemberTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queues/QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Members/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queue_sid": "QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_enqueued": "Tue, 07 Aug 2012 22:57:41 +0000",
                "position": 1,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json",
                "wait_time": 143
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testFetchFrontResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queue_sid": "QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_enqueued": "Tue, 07 Aug 2012 22:57:41 +0000",
                "position": 1,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json",
                "wait_time": 143
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("https://example.com");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('Url' => "https://example.com", );

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queues/QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Members/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json',
            null,
            $values
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queue_sid": "QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_enqueued": "Thu, 06 Dec 2018 18:42:47 +0000",
                "position": 1,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json",
                "wait_time": 143
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("https://example.com");

        $this->assertNotNull($actual);
    }

    public function testDequeueFrontResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "queue_sid": "QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_enqueued": "Tue, 07 Aug 2012 22:57:41 +0000",
                "position": 1,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json",
                "wait_time": 143
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("https://example.com");

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->members->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Queues/QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Members.json'
        ));
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "end": 0,
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members.json?PageSize=50&Page=0",
                "next_page_uri": null,
                "page": 0,
                "page_size": 50,
                "previous_page_uri": null,
                "queue_members": [
                    {
                        "queue_sid": "QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_enqueued": "Mon, 17 Dec 2018 18:36:39 +0000",
                        "position": 1,
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members/CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json",
                        "wait_time": 124
                    }
                ],
                "start": 0,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members.json?PageSize=50&Page=0"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "end": 0,
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members.json?Page=0&PageSize=50",
                "next_page_uri": null,
                "page": 0,
                "page_size": 50,
                "previous_page_uri": null,
                "queue_members": [],
                "start": 0,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Queues/QUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Members.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->queues("QUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->members->read();

        $this->assertNotNull($actual);
    }
}