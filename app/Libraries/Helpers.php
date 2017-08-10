<?php

namespace App\Libraries;

use App\Models\Seo;
use App\Models\Journal;
use App\Models\JournalCategory;
use App\Models\RecommendCategory;

class Helpers
{

    public static function getJournalCategories()
    {
        return JournalCategory::orderBy("rgt")->get();
    }

    public static function getRecommendCategories()
    {
        return RecommendCategory::orderBy("rgt")->get();
    }

    public static function getLastJournal()
    {
        return Journal::orderBy("rgt")->first();
    }

    public static function getSeo( $id )
    {
        return Seo::where('id', '=', $id)->first();
    }

}
