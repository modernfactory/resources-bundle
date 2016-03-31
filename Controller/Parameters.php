<?php

namespace ModernFactory\ResourcesBundle\Controller;

use Symfony\Component\HttpFoundation\ParameterBag;

class Parameters extends ParameterBag
{
    /**
     * {@inheritdoc}
     */
    public function get($path, $default = null, $deep = false)
    {
        $result = parent::get($path, $default, $deep);

        if ($this->has($path) && is_null($result) && !is_null($default)) {
            $result = $default;
        }

        return $result;
    }
}
