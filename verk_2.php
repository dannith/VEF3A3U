<?php

/**
Object Oriented Programming er verið að vinna með class (object) sem hefur eiginleika innan hans.

Munurinn á public og private í klösum er að private er einungis aðgengilegt inn í klasanum sjálfum,
utanaðkomandi kóði hefur ekki áhrif á hann, en public er hægt að breyta utan klasans.
Private og Public methods virka svipað, einungis hægt að kalla á Private methods innan klasans og Public utan.
Getter og Setters eru dæmi um Public method sem hefur áhrif á Private property.

Interfaces er nokkuð líkt klass sem extendast, en það er hægt að hafa búa til klasa sem notast við mörg interface.
Interface gerir kröfur til klasans um hvað þarf að vera í honum. Geta verið margir klassar sem hafa Interfacið Infos,
og það gerir kröfu að hafa printInfo, en klasarnir hafa mismunandi breytur til að printa út.

Með namespace getur þú haft marga Klasa sem hafa sama nafnið eða functions en gefur þeim annað með namespace til að greina á milli.
 */
class Book {

    protected $title;
    protected $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

class BookPro extends Book {

    protected $publisher;

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }
}

class User {

    private $email;
    private $password;

    public function __construct($array)
    {
        $this->email = $array[0];
        $this->password = $array[1];
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

$stærðfræði = new Book("Stærðfræði", 500);
$efnafræði = new Book("Efnafræði", 200);
$íslenska = new Book("Íslenska", 300);
$vef = new BookPro("PHP", 400);
$vef->setPublisher("Daníel");
echo $vef->getPublisher();
echo $vef->getTitle();

$user = new User(['e@mail.com', '123456']);
echo $user->getEmail();
echo $user->getPassword();