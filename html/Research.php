
<?php
session_start(); 
include("connect.php");
if (isset($_POST['submit'])) {
    if (!isset($_SESSION['username'])) {
        echo '<script>alert("Please Sign In to Comment on our Blogspot :)");</script>';
    } else {
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        if ($name != "" && $comment != "") {
            $sql = "INSERT INTO commentdetails(username, usercomment) 
                VALUES ('$name', '$comment')";
            $result = mysqli_query($conn, $sql);

            echo '<script>alert("Thank you for your comment. We will take it into consideration :).");</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Research</title>
    <meta charset="utf-8" /> 
    <meta name="author" content="Author name" /> 
    <meta name="copyright" content="Copyright owner" />
    <meta name="Internet" content="follow" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/extrablog.css">
    <link rel="icon" href="../Css/Images/icons8-wolf-64.png" image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container">
        <div id="navbar">
            <ul>
                <li><a href="../Index.php">Home</a></li>
                <li><a href="Blog.php">Blogs</a></li>
                <li><a href="./Research.php">More</a></li>
                <li><a href="./contact me.php">Contacts</a></li>
                <li style="float:Right"><a href="./About.php">About</a></li>
            </ul>
        </div>


        <div id="blogsection">
            <div class="blog-section-items" id="blogdescription">
                <p>Preview Previous Blogs</p>
                <p id="blog-time-description">Posted on: July 10,2023<br>Author: Subika Bista<br>
            </div>
            <div id="item1">
                <div id="blog1">
                    <a href="../html/BLog.html"><img src="../Css/Images/Network.jpg" alt="Phone" class="image"></a>

                </div>
                <div id="blog2">
                    <a href="../html/Blog Hacking.html"><img src="../Css/Images/Hacking.jpg" alt="Hacking"
                            class="image"></a>

                </div>
                <div id="blog3">
                    <a href="../html/Blog Phone.html"><img src="../Css/Images/phones.jpg" alt="Internet"
                            class="image"></a>

                </div>
                <div id="blog4">
                    <a href="../html/Blog Robot.html"><img src="../Css/Images/Robot.jpg" alt="AI" class="image"></a>

                </div>



            </div>
            <div class="blog-section-items" id="item2">
                <h2>Health and fitness<br><span id="date1"> Augest 6,2023</span> </h2>
                <div class="imageblog1">
                    <img src="../Css/Images/health.png" alt="">
                </div>

                <div class="blogpara1">
                    <p>
                        Embarking on the path to optimal health and fitness entails a profound commitment to the
                        intricate interplay between our physical prowess and mental fortitude. Beyond the realm of
                        conventional exercise regimens, genuine well-being is sculpted through a symphony of mindful
                        movement, nutrition alchemy, and a resolute dedication to self-care. The body, a marvel of
                        biological engineering, thrives when met with purposeful challenges, from dynamic strength
                        training that forges sinewy resilience to cardiovascular pursuits that awaken dormant vitality.
                        However, this journey transcends the realm of the purely corporeal; it demands a cultivated
                        awareness of our thoughts and emotions, an unwavering pursuit of balance, and an appreciation
                        for the intimate dialogue between the two spheres. With each nutrient-dense morsel savored and
                        every meditative breath drawn, we orchestrate a symposium of holistic wellness that resonates
                        through our very core, unfurling the vibrant tapestry of our existence.<br><br>Elevating oneself
                        to
                        the zenith of health and fitness represents an intricate dance of science and mindfulness, where
                        the cadence of sweat-soaked exertion harmonizes with the ethereal melody of inner reflection.
                        The canvas upon which this masterpiece unfolds is our physical vessel, a dynamic sculpture that
                        responds to the rhythm of disciplined training, be it the eloquence of yoga's poses or the
                        dynamism of high-intensity intervals. Fueling this enterprise is a culinary alchemy that marries
                        the art of taste with the science of nutrition, as we concoct a symphony of nutrients that
                        fortify and invigorate.<br><br>

                        Yet, as we traverse the terrain of brawn and endurance, we are inexorably drawn into the
                        labyrinth of the mind. Here, the pursuit of fitness takes on a profound depth, entwined with
                        psychological resilience and an unwavering commitment to self-improvement. The crucible of
                        self-care emerges as an imperative, as restorative sleep, meditative reverie, and the
                        cultivation of emotional intelligence become keystones in our holistic edifice.

                        In the nexus of sweat and introspection, we unearth a boundless wellspring of vitality that
                        flows not only through sinew and vein but also through perception and awareness. The journey
                        toward pinnacle fitness is a metamorphosis, a transmutation of body and soul, fueled by the
                        ceaseless desire to ascend higher, push farther, and evolve beyond our previous limitations.
                        This odyssey, ceaselessly challenging yet exquisitely rewarding, is a testament to the human
                        capacity for transformation, a testament inscribed upon the very fibers of our being.
                    </p>
                </div>
           
          
                
                
                
            </div>
            <div class="blog-section-items" id="item3">

                <h2>Creativity and Art<br><span id="date1"> Augest 6,2023</span> </h2>
                <div class="imageblog2">
                    <img src="../Css/Images/creativity.jpg" alt="">
                </div>

                <div class="blogpara2">
                    <p>
                        Embarking on the path to optimal health and fitness entails a profound commitment to the
                        intricate interplay between our physical prowess and mental fortitude. Beyond the realm of
                        conventional exercise regimens, genuine well-being is sculpted through a symphony of mindful
                        movement, nutrition alchemy, and a resolute dedication to self-care. The body, a marvel of
                        biological engineering, thrives when met with purposeful challenges, from dynamic strength
                        training that forges sinewy resilience to cardiovascular pursuits that awaken dormant vitality.
                        However, this journey transcends the realm of the purely corporeal; it demands a cultivated
                        awareness of our thoughts and emotions, an unwavering pursuit of balance, and an appreciation
                        for the intimate dialogue between the two spheres. With each nutrient-dense morsel savored and
                        every meditative breath drawn, we orchestrate a symposium of holistic wellness that resonates
                        through our very core, unfurling the vibrant tapestry of our existence.<br><br>Elevating oneself
                        to
                        the zenith of health and fitness represents an intricate dance of science and mindfulness, where
                        the cadence of sweat-soaked exertion harmonizes with the ethereal melody of inner reflection.
                        The canvas upon which this masterpiece unfolds is our physical vessel, a dynamic sculpture that
                        responds to the rhythm of disciplined training, be it the eloquence of yoga's poses or the
                        dynamism of high-intensity intervals. Fueling this enterprise is a culinary alchemy that marries
                        the art of taste with the science of nutrition, as we concoct a symphony of nutrients that
                        fortify and invigorate.<br><br>

                        Yet, as we traverse the terrain of brawn and endurance, we are inexorably drawn into the
                        labyrinth of the mind. Here, the pursuit of fitness takes on a profound depth, entwined with
                        psychological resilience and an unwavering commitment to self-improvement. The crucible of
                        self-care emerges as an imperative, as restorative sleep, meditative reverie, and the
                        cultivation of emotional intelligence become keystones in our holistic edifice.

                        In the nexus of sweat and introspection, we unearth a boundless wellspring of vitality that
                        flows not only through sinew and vein but also through perception and awareness. The journey
                        toward pinnacle fitness is a metamorphosis, a transmutation of body and soul, fueled by the
                        ceaseless desire to ascend higher, push farther, and evolve beyond our previous limitations.
                        This odyssey, ceaselessly challenging yet exquisitely rewarding, is a testament to the human
                        capacity for transformation, a testament inscribed upon the very fibers of our being.
                    </p>
                </div>
          
                
                
            </div>
            <div class="blog-section-items" id="item4">
                <h2>TechInsights<br><span id="date3"> Augest 6,2023</span> </h2>
                <div class="imageblog2">
                    <img src="../Css/Images/tech.jpg" alt="">
                </div>

                <div class="blogpara3">
                    <p>
                        TechInsights stands as a beacon of intellectual illumination in the vast expanse of the
                        technological landscape. With an unwavering commitment to unraveling the enigmatic tapestry of
                        innovation, it serves as a guiding star for those who seek profound insights into the
                        ever-evolving realm of technology. Through its meticulously crafted narratives, TechInsights
                        masterfully navigates the intricate pathways of artificial intelligence, blockchain,
                        cybersecurity, virtual reality, and beyond, distilling complex concepts into digestible
                        fragments of knowledge. A bastion of erudition, it empowers its readers to stride confidently
                        into the future, armed with a profound understanding of the transformative forces that shape our
                        digital existence. As we traverse the dynamic currents of progress, TechInsights remains a
                        steadfast companion, illuminating the uncharted territories of human ingenuity, one eloquent
                        byte at a time..<br><br>

                        Nestled at the crossroads of technological ingenuity and intellectual discourse, TechInsights
                        emerges as an unparalleled repository of enlightenment. With an ardent dedication to unearthing
                        the concealed treasures within the realm of innovation, this digital sanctum beckons the
                        inquisitive minds of today's digital explorers. Each prose-laden expedition into its virtual
                        pages is akin to embarking on a profound odyssey, where the arcane mysteries of artificial
                        intelligence transcend from abstract concepts to tangible revelations. A symphony of words
                        orchestrates a dance between the intricate nodes of blockchain's potential, unveiling a roadmap
                        to a decentralized future yet unseen.<br><br>

                        TechInsights is no mere observer; it is an architect of understanding in the complex citadel of
                        cybersecurity, fortifying knowledge shields against the incessant onslaught of digital
                        adversaries. Embarking on a guided tour through the immersive landscapes of virtual reality and
                        augmented reality, readers are transported to vistas where imagination intertwines with reality,
                        birthing new dimensions of possibility. Gazing heavenward, this techno-chronicle unfurls
                        narratives of humanity's audacious exploration of the cosmos, capturing the essence of our quest
                        for galactic discovery.<br><br>

                        Yet, the aspirations of TechInsights extend beyond the boundaries of today, stretching its reach
                        into the hazy tapestry of tomorrow's technological tapestry. In a digital age entwined with the
                        internet of things, this blog casts a visionary gaze, predicting the symbiotic union between the
                        virtual and the tangible. The symposium of words, images, and ideas is a testament to the blog's
                        devotion to unraveling the enigmatic, rendering the seemingly arcane accessible to all.<br><br>

                        As the digital horizon pulsates with the promise of advancement, TechInsights remains an
                        indomitable lighthouse of wisdom, guiding us through the uncharted waters of technological
                        evolution. Its narrative craftsmanship, emboldened by its steadfast pursuit of knowledge,
                        ignites a beacon of enlightenment amidst the swirling tides of innovation. With every keystroke,
                        every pixel, and every reader engaged, TechInsights kindles the flames of curiosity, urging us
                        all to embark on an intellectual voyage that illuminates the myriad facets of our tech-driven
                        world.
                    </p>
                </div>
     
            
                
            </div>

            <div class="comment-box" >
                <h3 style="margin-left:50px;">Leave a Comment</h3>
                <form action="Research.php" method="POST">
                    <label for="name" style="margin-left:50px;">Name:</label>
                    <input type="text" id="name" name="name" required style="margin-left:50px;width:90%">
                    
                    <label for="comment" style="margin-left:50px;" >Comment:</label>
                    <textarea id="comment" name="comment" rows="4" required style="margin-left:50px;width:90%" ></textarea>
                    
                    <button type="submit" name="submit" style="margin-left:50px;margin-top:20px;">Submit</button>
                </form>
            </div>
        </div>

        <div class="aside">
            <h5 id="aside-section-title">Other Blogs</h5>
            <div class="aside-section-items" id="asideitem1"> <a href="#item2"><img
                        src="../Css/Images/health.png" alt="Phone" class="image-aside"></a></div>
            <div class="aside-section-items" id="asideitem1"> <a href="#item3"><img
                        src="../Css/Images/creativity.jpg" alt="Phone" class="image-aside"></a></div>
            <div class="aside-section-items" id="asideitem1"> <a href="#item4"><img
                        src="../Css/Images/tech.jpg" alt="Phone" class="image-aside"></a></div>
            <div class="aside-section-items" id="asideitem1"> <a href="../html/Blog Phone.html"><img
                        src="../Css/Images/phones.jpg" alt="Phone" class="image-aside"></a></div>

        </div>

        <div id="bottomnavbar">
            <p>Hand Crafted with ☕ by <span> TEAM OF TWO</span></p>
            <p id="copyright-section">Copyright 2023 | All Rights Reserved</p>
        </div>
    </div>

    <div class="scroll-buttons">
        <button id="scrollToTop" title="Scroll to Top">&#8679;</button>
        <button id="scrollToBottom" title="Scroll to Bottom">&#8681;</button>
    </div>

    <script>
        const scrollToTopButton = document.getElementById('scrollToTop');
        const scrollToBottomButton = document.getElementById('scrollToBottom');
    
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    
        scrollToBottomButton.addEventListener('click', () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        });
    </script>


    

</body>

</html>

