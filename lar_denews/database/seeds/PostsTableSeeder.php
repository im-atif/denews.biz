<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 1, '/uploads/images/news-1.jpg', 'Iran\'s president says new oil field with 50 billion barrels found' ],
            [ 1, '/uploads/images/news-2.jpg', 'Viral tweet about Apple Card leads to Goldman Sachs probe' ],
            [ 1, '/uploads/images/news-2.jpg', 'Huawei founder says US sanctions not his toughest crisis' ],
            [ 1, '/uploads/images/news-3.jpg', 'Italy presses steelmaker to agree deal on plant, save jobs' ],
            [ 1, '/uploads/images/news-5.jpg', 'Global debt surges to record high $188 tn: IMF chief' ],
            [ 1, '/uploads/images/news-6.jpg', 'ArcelorMittal wants to cut 5,000 Italy jobs, says Italian PM' ],
            [ 1, '/uploads/images/news-7.jpg', 'Toyota posts 14% rise in Q2 operating profit as car sales rise' ],
            
            [ 2, '/uploads/images/news-8.jpg', 'BSNL Rs. 997 Long-Term Prepaid Recharge Launched With 3GB Daily Data, 180 Days Validity' ],
            [ 2, '/uploads/images/news-9.jpg', 'Jio Rs. 149 Prepaid Plan Now Includes 300 Jio to Non-Jio Minutes, Reduced Validity of 24 Days' ],
            [ 2, '/uploads/images/news-10.jpg', 'Samsung Galaxy A71 5G With Exynos 980 SoC, 128GB Storage in the Works: Report' ],
            [ 2, '/uploads/images/news-11.jpg', 'Apple Arcade Adds 6 New Games, Taking Total to 100' ],
            [ 2, '/uploads/images/news-12.jpg', 'Flight Prices from Lahore to New York May Actually Suprise You' ],
            [ 2, '/uploads/images/news-13.jpg', 'Alibaba Said to Plan $15 Billion Hong Kong Listing in Late November' ],
            [ 2, '/uploads/images/news-14.jpg', 'Samsung Galaxy A50s, Samsung Galaxy A30s Price in India Cut' ],

            [ 3, '/uploads/images/news-1.jpg', 'Govt Bans Use of Mobile Phones in Schools & Colleges' ],
            [ 3, '/uploads/images/news-2.jpg', 'Commercial Policy to Make Universities Self-Sufficient' ],
            [ 3, '/uploads/images/news-2.jpg', 'Pakistan\'s First Female Google Developer Expert in Machine Learning' ],
            [ 3, '/uploads/images/news-3.jpg', 'You Need to Know About Pakistan\'s Largest Ever Scholarship Program' ],
            [ 3, '/uploads/images/news-5.jpg', 'The Foundation of Baba Guru Nanak University on Oct. 28' ],
            [ 3, '/uploads/images/news-6.jpg', 'Shutdown Private Unregistered Schools In Seven Days' ],
            [ 3, '/uploads/images/news-7.jpg', 'Survey Discovers Alarming Level of Discrimination in Institutes' ],
    
            [ 4, '/uploads/images/news-1.jpg', 'Alcohol may be less harmful for people over 50' ],
            [ 4, '/uploads/images/news-2.jpg', 'What causes people to poop right after eating?' ],
            [ 4, '/uploads/images/news-2.jpg', 'Study reveals how much fiber we should eat to prevent disease' ],
            [ 4, '/uploads/images/news-3.jpg', 'These common drugs may increase dementia risk' ],
            [ 4, '/uploads/images/news-5.jpg', '6 innovations from Future Healthcare 2019' ],
            [ 4, '/uploads/images/news-6.jpg', 'This sleep disorder puts people at \'very high risk\' of Parkinson\'s' ],
            [ 4, '/uploads/images/news-7.jpg', 'Giving up alcohol for just 1 month has lasting benefits' ],
            
            [ 5, '/uploads/images/news-22.jpg', 'Evolution of French fashion from 16th to 19th century' ],
            [ 5, '/uploads/images/news-23.jpg', 'Special, and without precedent' ],
            [ 5, '/uploads/images/news-24.jpg', 'Cross-pollination of trends' ],
            [ 5, '/uploads/images/news-25.jpg', 'Clothes maketh a man' ],
            [ 5, '/uploads/images/news-26.jpg', 'Fashionable fusion wear for preteens' ],
            [ 5, '/uploads/images/news-27.jpg', 'Fashion is in a flux' ],
            [ 5, '/uploads/images/news-28.jpg', 'Fashion Education: On its own course' ],
        
            [ 6, '/uploads/images/news-22.jpg', 'Nail Your Next Big Toast with This Public Speaking Training' ],
            [ 6, '/uploads/images/news-23.jpg', 'Working Hard and Being Stressed Out Isn\'t a Sustainable Model for Success' ],
            [ 6, '/uploads/images/news-24.jpg', 'The 7 Qualities of Creative Thinkers' ],
            [ 6, '/uploads/images/news-25.jpg', 'This Top-Rated App Will Help You Relax and Stay Mindful' ],
            [ 6, '/uploads/images/news-26.jpg', 'How to Exercise Despite Your Busy Schedule' ],
            [ 6, '/uploads/images/news-27.jpg', 'Eat Healthier and Save Time Cooking With This Air Fryer' ],
            [ 6, '/uploads/images/news-28.jpg', 'The Comfort Zone Myth: What\'s Really Holding You Back?' ],
        
            [ 7, '/uploads/images/news-15.jpg', 'A Billy Joel-Themed Look at the Knicks and the Nets' ],
            [ 7, '/uploads/images/news-16.jpg', 'L.S.U. Survives Alabama’s Second-Half Push for a Big Win' ],
            [ 7, '/uploads/images/news-17.jpg', 'Jets and Giants Vie for Best New York Team Not Named the Bills' ],
            [ 7, '/uploads/images/news-18.jpg', 'Oregon’s Sabrina Ionescu Fuels Exhibition Win Over U.S. National Team' ],
            [ 7, '/uploads/images/news-19.jpg', 'U.S. Women’s Soccer Team Granted Class Status in Equal Pay Lawsuit' ],
            [ 7, '/uploads/images/news-20.jpg', 'Players to Watch in the 2019-20 College Basketball Season' ],
            [ 7, '/uploads/images/news-21.jpg', 'France Defeats Australia to Win the Fed Cup' ],
            
            [ 8, '/uploads/images/news-1.jpg', '6 spooky castles in Western Europe to stay in this Halloween' ],
            [ 8, '/uploads/images/news-2.jpg', 'When is the best time to visit Sri Lanka' ],
            [ 8, '/uploads/images/news-2.jpg', 'Shop online when travelling abroad with Splitcha: a new travel App' ],
            [ 8, '/uploads/images/news-3.jpg', 'Travel guide: 48 hours in Krakow, Poland' ],
            [ 8, '/uploads/images/news-5.jpg', 'Ice Skating in England: our selection of 9 glorious ice rinks' ],
            [ 8, '/uploads/images/news-6.jpg', 'Gatwick trials various boarding methods to reduce queues and flight delays' ],
            [ 8, '/uploads/images/news-7.jpg', 'The Edge Hudson Yards, the highest view of New York City opens in 2020' ],

            [ 9, '/uploads/images/news-29.jpg', 'Barbecue Party Tips For A Truly Amazing Event' ],
            [ 9, '/uploads/images/news-30.jpg', 'Grilling Tips For The Dog Days Of Summer' ],
            [ 9, '/uploads/images/news-31.jpg', 'Smarter Food Choices 101 Tips For Busy Women' ],
            [ 9, '/uploads/images/news-32.jpg', 'Deep Fryer Pieces Of Wisdom' ],
            
            [ 12, '/uploads/images/news-19.jpg', 'Subscribe To Our Weekly Newsletter' ],
            [ 7, '/uploads/images/news-41.jpg', 'Maui By Air The Best Way Around The Island' ],
            [ 20, '/uploads/images/news-39.jpg', 'Hypnotherapy For Motivation Getting The Drive Back' ],
            [ 2, '/uploads/images/news-38.jpg', 'Going Wireless With Your Headphones' ],
            [ 18, '/uploads/images/news-37.jpg', 'It takes a big idea to attract the attention of consumers and get them to buy your product' ],
            [ 12, '/uploads/images/news-36.jpg', 'Sony Laptops Are Still Part Of The Sony Family' ],
            [ 17, '/uploads/images/news-35.jpg', 'Barbeque Techniques Two Methods To Consider' ],
            [ 16, '/uploads/images/news-34.jpg', 'Old Fashioned Recipe For Preventing Allergies And Chemical Sensitivities' ],
            [ 8, '/uploads/images/news-33.jpg', 'Will The Democrats Be Able To Reverse The Online Gambling Ban' ],
            
            [ 8, '/uploads/images/news-50.jpg', 'Get Around Easily With A New York Limousine Service' ],
            [ 15, '/uploads/images/news-49.jpg', 'Here, I Focus On A Range Of Items And Features' ],
            [ 14, '/uploads/images/news-48.jpg', 'Kipchoge Proves He Has No Equal: Runs 2nd Fastest Marathon Time In History' ],
            [ 6, '/uploads/images/news-47.jpg', 'Boxed Water Partners With Rag & Bone To Tap Consumer Creativity' ],
            [ 8, '/uploads/images/news-46.jpg', 'Crispy Air Fryer Parmesan And Thyme Roasted Wedge Fries' ],
            [ 13, '/uploads/images/news-45.jpg', 'Increasing Prosperity With Positive Thinking' ],
            
            [ 9, '/uploads/images/news-30.jpg', 'Stocking Your Restaurant Kitchen Finding Reliable Sellers' ],
            [ 5, '/uploads/images/news-11.jpg', 'Unmatched Toner Cartridge Quality 20 Less Than Oem Price' ],
            [ 8, '/uploads/images/news-23.jpg', 'World Travel Holdings Will Be Honored Alongside Other Recipients' ],
            [ 7, '/uploads/images/news-10.jpg', 'Get The Boot A Birds Eye Look Into Mcse Boot Camps' ],
            [ 12, '/uploads/images/news-28.jpg', 'To Keep Makeup Looking Fresh Take A Powder' ],
            
            [ 11, '/uploads/images/news-44.jpg', 'African Nations Are Struggling To Save Their Wildlife' ],
            [ 10, '/uploads/images/news-43.jpg', 'Tesla\'s Cooking Up A New Way To Wire Its Cars, Report Says' ],
            [ 6, '/uploads/images/news-42.jpg', 'Trip To Iqaluit In Nunavut A Canadian Arctic City' ],
            [ 8, '/uploads/images/news-41.jpg', '50 Years After The Moon Landing: How Close Is Space Travel, Really?' ],
            [ 2, '/uploads/images/news-51.jpg', 'VR Is the Use of Computer Technology to Create a Simulated Environment' ],
        ];

        $postContent = '<p>Moms are the ones who bandage our boo-boos when we’re little and continue to take care of us as we get older—often sacrificing their ownneeds so they can help with ours. Cruising on a bike to help heal our injuries is the most mom thing one can do.</p><blockquote><p>If you’ve been waiting for an invitation, this calligraphy is it. Commissioned by Facebook, this is a hand-lettered design for a poster.Quote is Facebook Building 8 VP’s Regina Dugan—and mine.</p></blockquote><p>Moms are the ones who bandage our boo-boos when we’re little and continue to take care of us as we get older—often sacrificing their ownneeds so they can help with ours. Cruising on a bike to help heal our injuries is the most mom thing one can do.</p><p>They’re the ones we rely on for playdates and emotional support, homework help and babysitting. Moms are the ultimate dependable support. Like, hopefully, the button on your jeans.</p><h3>Here Come The Moms In Space</h3><ul class="row gallery text-center"><li class="col-lg-6"><figure><img src="/uploads/post-single-gallery/post-single-gallery-6.jpg" alt="img"><figcaption>Drawn for an insurance company</figcaption></figure></li><li class="col-lg-6"><figure><img src="/uploads/post-single-gallery/post-single-gallery-7.jpg" alt="img"><figcaption>Drawn for an insurance company</figcaption></figure></li></ul><p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p> <p>They’re the ones we rely on for playdates and emotional support, homework help and babysitting. Moms are the ultimate dependable support. Like, hopefully, the button on your jeans.</p> <p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we  want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.</p> <p>My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.</p><h3>Want To See More Dribbble Shots?</h3> <p>Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p><p>They’re the ones we rely on for playdates and emotional support, homework help and babysitting. Moms are the ultimate dependable support. Like, hopefully, the button on your jeans.</p>';

        foreach ($data as $key => $value) {
            App\Post::create([
                'title'             =>  $value[2],
                'slug'              =>  $this->generateSlug($value[2]),
                'content'           =>  $postContent,
                'category_id'       =>  $value[0],
                'featured'          =>  $value[1],
                'user_id'           =>  rand(1, 7)
            ]);
        }
    }

    protected function generateSlug($string)
	{
	    $string = preg_replace('~[^\pL\d]+~u', '-', $string);
	    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
	    $string = preg_replace('~[^-\w]+~', '', $string);
	    $string = trim($string, '-');
	    $string = preg_replace('~-+~', '-', $string);
	    $string = strtolower($string);
	    
	    return !empty($string) ? $string : false;
	}
}
