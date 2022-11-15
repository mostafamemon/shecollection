<?php
    use App\Models\EcomCategory;
    use App\Models\EcomSubCategory;

    function get_sub_category($category_id)
    {
        return EcomSubCategory::where('category_id',$category_id)->orderBy('sub_category_name','asc')->get(); 
    }