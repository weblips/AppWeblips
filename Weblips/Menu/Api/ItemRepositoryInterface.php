<?php

namespace Weblips\Menu\Api;

interface ItemRepositoryInterface {

    /**
     * @return  \Weblips\Menu\Api\Data\ItemInterface[]
     */
    public function getList();
}
