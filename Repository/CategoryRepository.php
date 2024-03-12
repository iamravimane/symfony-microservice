<?php


class CategoryRepository
{


    public function getAll()
    {

        return 'select * from category';
    }



}


class ProductRepository
{



    public function getAll()
    {
        return 'select * from product';
    }

    public function getAllByCache()
    {

        if(Cache::has('category'))
        {
            return Cache::get('category');
        }

        cache::Set('category', 'all category');
    }

}