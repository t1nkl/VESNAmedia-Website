<?php

namespace App\Libraries;

use App\Models\{Seo, Journal, JournalCategory, RecommendCategory};

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
