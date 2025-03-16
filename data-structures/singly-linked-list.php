<?php

# Singly Linked List

class SinglyLinkedList
{
    private $head = NULL;
    private $tail = NULL;

    public function insertAtHead($data)
    {
        $node = new ListNode($data);

        if ($this->head === NULL) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $node->next = $this->head;
            $this->head = $node;
        }
    }

    public function insertAtTail($data)
    {
        $node = new ListNode($data);

        if ($this->head === NULL) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->tail->next = $node;
            $this->tail = $node;
        }
    }

    public function traverse_and_print()
    {
        $currentNode = $this->head;
        while ($currentNode != NULL) {
            echo "$currentNode->data -> ";
            $currentNode = $currentNode->next;
        }

        echo "NULL";
    }

    public function reverse()
    {
        if ($this->head === NULL) {
            return;
        }

        if ($this->head === $this->tail) {
            return;
        }

        $currentNode = $this->head;
        $temp = NULL;
        while ($currentNode != NULL) {
            $next = $currentNode->next;
            $currentNode->next = $temp;
            $temp = $currentNode;
            $currentNode = $next;
        }

        $this->head = $temp;
    }

    public function deleteAtHead()
    {
        if ($this->head === NULL) {
            return;
        }

        if ($this->head === $this->tail) {
            unset($this->head);
            unset($this->tail);
            $this->head = $this->tail = NULL;
            return;
        }

        $temp = $this->head;
        $this->head = $this->head->next;
        unset($temp);
    }

    public function deleteAtTail()
    {
        if ($this->tail === NULL) {
            return;
        }

        if ($this->head === $this->tail) {
            unset($this->head);
            unset($this->tail);

            $this->head = $this->tail = NULL;
            return;
        }

        $currentNode = $this->head;
        while ($currentNode->next != $this->tail) {
            $currentNode = $currentNode->next;
        }

        unset($currentNode->next);
        $currentNode->next = NULL;
        $this->tail = $currentNode;
    }

}

class ListNode
{
    public $data = NULL;
    public $next = NULL;

    public function __construct($data = NULL)
    {
        $this->data = $data;
    }

}

$list = new SinglyLinkedList();
$list->insertAtTail(1);
$list->insertAtTail(2);
$list->insertAtTail(3);
$list->insertAtTail(4);
$list->insertAtTail(5);
$list->reverse();
$list->traverse_and_print();
