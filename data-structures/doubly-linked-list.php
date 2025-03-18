<?php

declare(strict_types=1);

class DoublyLinkedList
{
    public $head;
    public $tail;

    public function insertAtHead($data)
    {
        $node = new ListNode($data);

        if ($this->head == NULL) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->head->prev = $node;
            $node->next = $this->head;
            $this->head = $node;
        }
    }


    public function insertAtTail($data)
    {
        $node = new ListNode($data);

        if ($this->head == NULL) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->tail->next = $node;
            $node->prev = $this->tail;
            $this->tail = $node;
        }
    }


    public function getNode($index)
    {
        $count = 0;
        $currentNode = $this->head;

        while ($currentNode !== NULL && $count < $index) {
            $currentNode = $currentNode->next;
            $count++;
        }

        return $currentNode;
    }


    public function deleteAtHead()
    {
        if ($this->head === NULL) {
            return;
        }

        if ($this->head === $this->tail) {
            $this->head = NULL;
            $this->tail = NULL;

            return;
        }


        $newHead = $this->head->next;
        $this->head = $newHead;


        // Final check in case insertion is buggy. Just to make sure.
        if ($newHead !== NULL) {
            $newHead->prev = NULL;
        }
    }


    public function deleteAtTail()
    {

        if ($this->tail === NULL) {
            return;
        }

        if ($this->tail === $this->head) {
            $this->head = NULL;
            $this->tail = NULL;

            return;
        }

        $newTail = $this->tail->prev;
        $this->tail = $newTail;


        if ($newTail !== NULL) {
            $newTail->next = NULL;
        }
    }
}

class ListNode
{
    public $data = NULL;
    public $next = NULL;
    public $prev = NULL;

    public function __construct($data = NULL)
    {
        $this->data = $data;
    }

    public function __destruct()
    {
        echo "\nListNode is destroyed. Data: $this->data";
    }
}


$list = new DoublyLinkedList();
$list->insertAtTail(1);
$list->insertAtTail(2);
$list->insertAtTail(3);
$list->insertAtTail(4);
$list->insertAtTail(5);

$list->deleteAtHead();
echo "\n----";
$list->deleteAtHead();
echo "\n----";
$list->deleteAtTail();
echo "\n----";
$list->deleteAtTail();
echo "\n----";

echo "\n " . $list->head->data;
echo "\n " . $list->tail->data;