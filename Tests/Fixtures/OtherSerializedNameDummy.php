<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * @author Anthony GRASSIOT <antograssiot@free.fr>
 */
class OtherSerializedNameDummy
{
    /**
     * @Groups({"a"})
     */
    private $buz;

    /**
     * This is the property I added to test fixture
     *
     * @Groups({"c"})
     * @SerializedName("bax")
     */
    private $baz;

    public function setBuz($buz)
    {
        $this->buz = $buz;
    }

    public function getBuz()
    {
        return $this->buz;
    }

    /**
     * @Groups({"b"})
     * @SerializedName("buz")
     */
    public function getBuzForExport()
    {
        return $this->buz.' Rocks';
    }
}
