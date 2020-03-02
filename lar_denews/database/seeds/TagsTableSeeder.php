<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Education', 'education'],
            ['Business', 'business'],
            ['Lifestyle', 'lifestyle'],
            ['Technology', 'technology'],
            ['Health', 'health'],
            ['Sports', 'sports'],
            ['Travel', 'travel'],
            ['Cooking', 'cooking'],
            ['Wildlife', 'wildlife'],
            ['Fashion', 'fashion'],
            ['Beauty', 'beauty'],
            ['World', 'world'],
            ['Food', 'food'],
            ['Racing', 'racing'],
            ['Swimming', 'swimming'],
            ['Science', 'science'],
            ['Philosophy', 'philosophy'],
            ['Advertising', 'advertising'],
            ['Trade', 'trade'],
            ['Motivation', 'motivation'],
            ['Politics', 'politics'],
            ['Entertainment', 'entertainment'],
            ['Gaming', 'gaming'],
            ['Adventure', 'adventure'],
            ['U.N.', 'un'],
            ['Conflicts', 'conflicts'],
            ['Terrorism', 'terrorism'],
            ['Disasters', 'disasters'],
            ['Global Economy', 'global-economy'],
            ['Environment', 'environment'],
            ['Religion', 'religion'],
            ['Scandals', 'scandals'],
            ['Executive', 'executive'],
            ['Senate', 'senate'],
            ['House', 'house'],
            ['Judiciary', 'judiciary'],
            ['Foreign Policy', 'foreign-policy'],
            ['Polls', 'polls'],
            ['Elections', 'elections'],
            ['Celebrity News', 'celebrity-news'],
            ['Movies', 'movies'],
            ['TV News', 'tv-news'],
            ['Music News', 'music-news'],
            ['Style News', 'style-news'],
            ['Entertainment Video', 'entertainment-video'],
            ['Markets', 'markets'],
            ['Features', 'features'],
            ['Business Leaders', 'business-leaders'],
            ['Healthy Living', 'healthy-living'],
            ['Medical Research', 'medical-research'],
            ['Mental Health', 'mental-health'],
            ['Cancer', 'cancer'],
            ['Heart Health', 'heart-health'],
            ['Childrens Health', 'childrens-health'],
            ['Music', 'music']
        ];

        foreach ($data as $key => $value) {
            App\Tag::create([
                'tag'      =>  $value[0],
                'slug'      =>  $value[1]
            ]);
        }
    }
}
