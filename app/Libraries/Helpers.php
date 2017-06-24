<?php

namespace App\Libraries;

use App\Models\Journal;
use App\Models\JournalCategory;
use App\Models\RecommendCategory;

class Helpers
{

    public static function getJournalCategories()
    {
        $journal_categories = JournalCategory::orderBy("rgt")->get();
        return $journal_categories;
    }

    public static function getRecommendCategories()
    {
        $recommend_categories = RecommendCategory::orderBy("rgt")->get();
        return $recommend_categories;
    }

    public static function getLastJournal()
    {
        $last_journal = Journal::latest()->first();
        return $last_journal;
    }

}
