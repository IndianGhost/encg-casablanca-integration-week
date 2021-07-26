<?php


namespace App\Repositories\Contact;


use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getAll()
    {
        return $this->contact->getAll();
    }

    public function find($id)
    {
        return $this->contact->findContact($id);
    }

    public function update(array $data, $attribute, $attribute_value, $operator = "=")
    {
        return contact::where($attribute, $operator, $attribute_value)->update($data);
    }

    public function delete($id)
    {
        return $this->contact->deleteContact($id);
    }
}
