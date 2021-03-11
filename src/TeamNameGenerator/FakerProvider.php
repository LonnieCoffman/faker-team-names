<?php

namespace TeamNameGenerator;

class FakerProvider extends \Faker\Provider\Base
{
    protected static $adjectives = array(
      'Abhorrent', 'Abnormal', 'Abominable', 'Above Average', 'Absent-Minded', 'Absolute Zero', 'Abusive', 'Acclaimed', 'Acid Green', 'Across the Miles', 'Adaptable', 'Addicting', 'Addictive', 'Adjustable', 'Adulterous',
      'Adventurous', 'Affectionate', 'Affordable', 'Aggressive', 'Agreeable', 'Alabaster', 'Alcoholic', 'all-Devouring', 'all-Night', 'all-Round', 'all-Wheel Drive', 'Always There', 'Amazon', 'Ambitious', 'Analytical',
      'Anatomically Designed', 'Android Green', 'Angry', 'Antimicrobial', 'Antique Brass', 'Apathetic', 'Appalling', 'Apple Green', 'Appreciated', 'Appreciative', 'Apprehensive', 'Approachable', 'Arctic Lime',
      'Argumentative', 'Army Green', 'Arrogant', 'Artificial', 'Asparagus', 'Assertive', 'Astonishing', 'Asymmetrical', 'at-the-Ready', 'Atomic Tangerine', 'Attentive', 'Attracted', 'Attractive', 'Automatic',
      'Automotive', 'Avocado', 'Award-Winning', 'B\'Dazzled Blue', 'Backstabbing', 'Banana Mania', 'Barbecued', 'Barbie Pink', 'Bare-Assed', 'Barrel-Chested', 'Bat Shit Crazy', 'Bean-Shaped', 'Bearded', 'Beautiful',
      'Beaver', 'Beefed-up', 'Beetle-Browed', 'Befitting', 'Behavioral', 'Behaviouristic', 'Believing', 'Bell-Bottom', 'Belligerent', 'Below Average', 'Beneficent', 'Bereftoflife', 'Best-Known', 'Best-Selling',
      'Bewildered', 'Beyond Compare', 'Beyond Reproach', 'Big & Tall', 'Big-Bellied', 'Big-Shouldered', 'Bigheaded', 'Bighearted', 'Bitter Lime', 'Bittersweet', 'Black Coffee', 'Black-and-Tan', 'Blasphemous',
      'Blathering', 'Blind Drunk', 'Blindfolded', 'Blood Red', 'Blood-Curdling', 'Bloodcurdling', 'Blue-Eyed', 'Bluetiful', 'Boisterous', 'Bone-Chilling', 'Bonkers', 'Borderline', 'Bottle-Conditioned', 'Boundless',
      'Brainless', 'Breakable', 'Breathable', 'Breathless', 'Brewery-Fresh', 'Brick Red', 'Bright Green', 'Bright-Eyed', 'Brilliant', 'Brilliant Rose', 'Brink Pink', 'Broad-Minded', 'Brokenhearted', 'Brown Sugar',
      'Buff', 'Bull Headed', 'Burned-Out', 'Businesslike', 'Byzantine', 'Café AU Lait', 'Café Noir', 'Calculating', 'Calloused', 'Cameo Pink', 'Canary Yellow', 'Candy Apple Red', 'Cantankerous', 'Cask-Conditioned',
      'Cat-Friendly', 'Caught Red-Handed', 'Caught up', 'Caught-in-the-Act', 'Centralized', 'Certifiable', 'Chainlike', 'Challenging', 'Champagne', 'Charcoal', 'Chartreuse', 'Chauvinistic', 'Checkered', 'Cherished',
      'Cherry Blossom Pink', 'Cherry-Sized', 'Childlike', 'Chivalrous', 'Chocolate', 'Cinnamon Satin', 'Circumspect', 'Cloak-and-Dagger', 'Closed in', 'Closed-Circuit', 'Cloven-Hoofed', 'Coal-Fired', 'Cocky',
      'Coincidental', 'Cold Sober', 'Cold-Blooded', 'Cold-Eyed', 'Cold-Hearted', 'Coldhearted', 'Combatant', 'Combative', 'Combinable', 'Combinatory', 'Combustible', 'Combustive', 'Comfortable', 'Comforted',
      'Comforting', 'Comfortless', 'Communicative', 'Communion', 'Compassionate', 'Competent', 'Competitive', 'Complicated', 'Conceited', 'Concerned', 'Condemned', 'Condescending', 'Confident', 'Confrontational',
      'Confused', 'Congo Pink', 'Connected', 'Conniving', 'Conscientious', 'Considerate', 'Consoling', 'Constructed of', 'Contemporary', 'Contemptible', 'Control-Top', 'Controlling', 'Convivial', 'Cool Grey',
      'Cool-Headed', 'Cooperative', 'Cornflower Blue', 'Cornsilk', 'Corpselike', 'Corpulent', 'Costumed', 'Courageous', 'Courteous', 'Cowardly', 'Crackling', 'Craft-Brewed', 'Crash-Tested', 'Crate-Trained', 'Crawly',
      'Crazy Cute', 'Cream', 'Creamy-White', 'Crease-Resistant', 'Credulous', 'Crestfallen', 'Critically Acclaimed', 'Cross-Stitched', 'Cruel-Hearted', 'Crystal Clear', 'Cultured', 'Curled up', 'Cushioned',
      'Custom-Built', 'Custom-Designed', 'Customized', 'Cutting-Edge', 'Dangerous', 'Daredevil', 'Dark Salmon', 'Dark-Fruited', 'Dark-Gray', 'Dead', 'Dead on Target', 'Deaf-and-Dumb', 'Deafening', 'Deathlike',
      'Deceitful', 'Deceiving', 'Decorative', 'Deep', 'Deep Chestnut', 'Deep Pink', 'Deep Saffron', 'Deep Space Sparkle', 'Deeply Flavored', 'Deferential', 'Degrading', 'Delicious', 'Delightful', 'Demanding',
      'Demolished', 'Demoralized', 'Dependable', 'Dependent', 'Deplorable', 'Depressed', 'Depressing', 'Desecrating', 'Determined', 'Detestable', 'Developed', 'Different', 'Difficult', 'Dignified', 'Dimwitted',
      'Diplomatic', 'Disagreeable', 'Disappointed', 'Disappointing', 'Discerning', 'Discounted', 'Disgraceful', 'Disgusted', 'Disgusting', 'Disheartened', 'Dishonest', 'Disobedient', 'Disreputable', 'Disrespectful',
      'Disruptive', 'Distasteful', 'Distended', 'Distinctive', 'Distracted', 'Distraught', 'Distressed', 'Distressing', 'Distrustful', 'Disturbed', 'Disturbing', 'Domesticated', 'Double-Crossing', 'Drab', 'Dressed As',
      'Dressed-up', 'Drinkable', 'Drivetrain', 'Drunken', 'Dry-Hopped', 'Duck-Like', 'Eager-to-Please', 'Easy Going', 'Easy-Going', 'Easy-to-Drive', 'Easy-to-Maintain', 'Easy-to-Play', 'Easy-to-Train', 'Easygoing',
      'Eccentric', 'Eco-Friendly', 'Economical', 'Educational', 'Eerie Black', 'Effective', 'Efficient', 'Egotistical', 'Elephantine', 'Elongated', 'Emaciated', 'Embarrassed', 'Embarrassed to the Bone', 'Embarrassing',
      'Embellished', 'Embittered', 'Embroidered', 'Emotional', 'Empathetic', 'Empowered', 'Empowering', 'Enchanting', 'Encouraging', 'Endurable', 'Energetic', 'Engineered', 'Engrossed', 'Engrossing', 'Enlightened',
      'Enterprising', 'Entertaining', 'Enthusiastic', 'Environmentally-Friendly', 'Ergonomic', 'Essential', 'Even-Tempered', 'Ever-Changing', 'Everlasting', 'Exasperating', 'Excellent', 'Exceptionable', 'Exceptional',
      'Excitable', 'Exclusive', 'Expansive', 'Expectant', 'Expedient', 'Expensive', 'Experienced', 'Exploiting', 'Extensive', 'Extra Large', 'Extraordinary', 'Exuberant', 'Eye-Deceiving', 'Eye-Rolling', 'Fabric-Lined',
      'Factitious', 'Factory-Made', 'Fainthearted', 'Fair-and-Square', 'Fair-Minded', 'Fallow', 'Family-Friendly', 'Family-Oriented', 'Family-Owned', 'Fan-Leafed', 'Fancy-Free', 'Fang-Tastic', 'Fantastic',
      'Fashion Fuchsia', 'Fashionable', 'Fastidious', 'Fear-Inspiring', 'Fermented', 'Ferocious', 'Fiercely Loyal', 'Fiercely-Loyal', 'Fighting', 'Figure-Friendly', 'Filthy', 'Finely Detailed', 'Flame', 'Flat-Chested',
      'Flattering', 'Flavorful', 'Flax', 'Flickering', 'Flirt', 'Flirting', 'Floral White', 'Fluffy', 'Forgetful', 'Forgiving', 'Form-Fitting', 'Formidable', 'Fortunate', 'Four-Legged', 'Four-Wheel Drive', 'Free-Loading',
      'Freeloading', 'French Raspberry', 'French Rose', 'Freshly Brewed', 'Friendless', 'Frightened', 'Frightening', 'Frisky', 'Front-Wheel Drive', 'Frostbite', 'Frozen', 'Fuchsia', 'Fuel-Efficient', 'Fuel-Effiecient',
      'Full of Rage', 'Full-Bodied', 'Full-Flavored', 'Full-Grown', 'Full-Priced', 'Fully Lined', 'Functional', 'Futuristic', 'Fuzzy Wuzzy', 'Gargantuan', 'Geographic', 'Geometric', 'Geometrical', 'Ghostlike',
      'Ghoulishly Delightful', 'Glistening', 'Glutinous', 'Gobsmacked', 'God-Awful', 'Godawful', 'Gold-Digging', 'Good-for-Nothing', 'Good-Natured', 'Good-Quality', 'Grade-Appropriate', 'Graveside', 'Greedy',
      'Gregarious', 'Groveling', 'Guilt-Ridden', 'Gunmetal', 'Hack-and-Slash', 'Hair-Raising', 'Hairless', 'Half-Crazed', 'Half-Dozen', 'Half-Obedient', 'Half-Priced', 'Half-Size', 'Halfwitted', 'Hallucinating',
      'Hallucinogenic', 'Hand-Sewn', 'Hand-Washed', 'Handcrafted', 'Handwritten', 'Happy-Go-Lucky', 'Hard-Hitting', 'Hard-Working', 'Hardheaded', 'Harlequin', 'Harmonious', 'Harsh', 'Hateful', 'Haunting', 'Hauntingly',
      'Healthful', 'Heart-Healthy', 'Heart-Shaped', 'Heartbreaking', 'Heartbroken', 'Heartfelt', 'Heartsick', 'Heartwarming', 'Heat Wave', 'Heated up', 'Herculean', 'Hideous', 'High-Agility', 'High-End', 'High-Flying',
      'High-Level', 'High-Performance', 'High-Powered', 'High-Priced', 'High-Stakes', 'High-Waisted', 'Higher Ranking', 'Hilarious', 'Home-Brewed', 'Honest-to-God', 'Honest-to-Goodness', 'Honeydew', 'Honorable',
      'Horrendous', 'Hot', 'Hot Magenta', 'Hot Pink', 'Hot-Headed', 'House-Broken', 'Housebroken', 'Humiliating', 'Humpbacked', 'Hyperactive', 'Hypercritical', 'Hysterical', 'Iceberg', 'Idiotic', 'Ignominious',
      'Ill-Tempered', 'Illogical', 'Imaginative', 'Impartial', 'Impatient', 'Impertinent', 'Imperturbable', 'Impetuous', 'Impossible', 'Impractical', 'Impressionable', 'Impressive', 'Impulsive', 'in Denial',
      'in Disguise', 'in Good Health', 'in My Thoughts', 'in the Wrong', 'Inadequate', 'Inappropriate', 'Incompetent', 'Inconsiderate', 'Inconsistent', 'Indecent', 'Indefatigable', 'Independent', 'Indiscreet',
      'Individualist', 'Indulgent', 'Industrious', 'Inexcusable', 'Inexpensive', 'Inexperienced', 'Infuriated', 'Infuriating', 'Innovative', 'Inquisitive', 'Insane', 'Insanely Creepy', 'Insecure', 'Insensitive',
      'Insidious', 'Insincere', 'Inspirational', 'Inspiring', 'Instinctive', 'Instinctual', 'Intellectual', 'Intelligent', 'Interesting', 'Internet Worthy', 'Intolerant', 'Intoxicating', 'Intricate', 'Intuitive',
      'Inventive', 'Invidious', 'Irascible', 'Irrational', 'Irresistible', 'Irresistible', 'Irresponsible', 'Irreverent', 'Irritable', 'Irritating', 'Itch-Free', 'Itsy-Bitsy', 'Jazzberry Jam', 'Judgmental', 'June Bud',
      'Key Lime', 'Kid-Friendly', 'Kind-Hearted', 'Kindhearted', 'Knowledgeable', 'Languid Lavender', 'Lapis Lazuli', 'Legendary', 'Lemon Meringue', 'Lethargic', 'Level-Headed', 'Light Periwinkle', 'Light Pink',
      'Lightning-Fast', 'Lightweight', 'Lilac', 'Lilac Luster', 'Limitless', 'Liver', 'Livid', 'Loathsome', 'Loitering', 'Long Distance', 'Long-Haired', 'Long-Lasting', 'Long-Legged', 'Long-Limbed', 'Long-Winded',
      'Love-Lorn', 'Low-Emission', 'Lumbering', 'Luxurious', 'Macaroni and Cheese', 'Machine Washable', 'Macro-Brewed', 'Magenta', 'Magic Mint', 'Magical', 'Magnificent', 'Make-Believe', 'Malicious', 'Mango Tango',
      'Maniacal', 'Manipulating', 'Manipulative', 'Masculine', 'Massive', 'Mauvelous', 'Meaningful', 'Meddlesome', 'Medicated', 'Medium-Bodied', 'Melancholy', 'Memorable', 'Mentally Impaired', 'Metal', 'Methodical',
      'Meticulous', 'Micro-Brewed', 'Mimi Pink', 'Minacious', 'Mindaro', 'Miniature', 'Minimalist', 'Minion Yellow', 'Mint Cream', 'Misbehaving', 'Mischievous', 'Miserable', 'Misunderstood', 'Mixed Breed', 'Mixed-Media',
      'Moisture-Wicking', 'Monstrous', 'Motionless', 'Motivated', 'Multiplayer', 'Must-Have', 'Mustard', 'Mysterious', 'Mystic Maroon', 'Nadeshiko Pink', 'Naked', 'Narrative', 'Narrow-Minded', 'Naturally', 'Nauseating',
      'Neon Carrot', 'Neon Fuchsia', 'Neverending', 'New York Pink', 'Nightmarish', 'Nighttime', 'No Longer', 'Non-Alcoholic', 'Non-Photo Blue', 'Nonlinear', 'Nostalgic', 'Noteworthy', 'Objectionable', 'Obnoxious',
      'Obsessive-Compulsive', 'Obstinate', 'Ochre', 'Odor-Absorbing', 'Odor-Resistant', 'off-Color', 'Offending', 'Offensive', 'Old Burgundy', 'Old-Fashioned', 'One-Sided', 'Opera Mauve', 'Optimistic', 'Orange Peel',
      'Organically Produced', 'Ostentatious', 'Otherworldly', 'Out of Control', 'Out-of-Control', 'Out-of-Line', 'Outnumbered', 'Outrageous', 'Outrageous Orange', 'Outspoken', 'Outstanding', 'Overjoyed', 'Oversized',
      'Overweight', 'Oxblood', 'Painfully Honest', 'Painstaking', 'Pansy Purple', 'Papaya Whip', 'Paradise Pink', 'Passed Away', 'Passed on', 'Passionate', 'Pastel Pink', 'Patchwork', 'Paternalistic', 'Patterned',
      'Pea-Brained', 'Peach', 'Peach Puff', 'Pearly Purple', 'Peg-Legged', 'People-Friendly', 'Perfectly Balanced', 'Perfectly Poured', 'Performance-Inspired', 'Periwinkle', 'Persevering', 'Persimmon', 'Persistent',
      'Persnickety', 'Personable', 'Phantasmal', 'Philosophical', 'Piggy Pink', 'Pink Lace', 'Pioneering', 'Pissed off', 'Pistachio', 'Plain-Speaking', 'Plausible', 'Plump Purple', 'Plus Size', 'Pointless',
      'Polished Pine', 'Pomp and Power', 'Ponderous', 'Popstar', 'Potbellied', 'Potty-Trained', 'Practical', 'Prejudiced', 'Preternatural', 'Priceless', 'Pro-Active', 'Problem-Solving', 'Productive', 'Professional',
      'Proficient', 'Progressive', 'Promiscuous', 'Pronounced', 'Proprietary', 'Protective', 'Protruding', 'Provocative', 'Prune', 'Psychedelic Purple', 'Puce', 'Pumpkin', 'Purple Mountain Majesty', 'Purple Pizzazz',
      'Purple Plum', 'Purpureus', 'Quarrelsome', 'Queen Blue', 'Querulous', 'Quick-Shifting', 'Quick-Tempered', 'Quick-to-Set-up', 'Quick-Witted', 'Quintessential', 'Radical Red', 'Rambunctious', 'Raspberry',
      'Razzle Dazzle Rose', 'Razzmatazz', 'Ready-for-Action', 'Ready-to-Please', 'Real-Time', 'Realistic', 'Reassuring', 'Rebellious', 'Receptive', 'Reclusive', 'Red Salsa', 'Reflective', 'Refreshing', 'Reinforced',
      'Relieving', 'Reluctant', 'Remodeled', 'Repellent', 'Reprehensible', 'Repugnant', 'Repulsive', 'Resentful', 'Resourceful', 'Respected', 'Respectful', 'Responsible', 'Retro Print', 'Revolting', 'Rhetorical',
      'Richly Hopped', 'Ridiculous', 'Righteous', 'Rocker-Style', 'Role-Playing', 'Rose Bonbon', 'Rose Pompadour', 'Run-and-Gun', 'Russet', 'Sadistic', 'Saffron', 'Sale-Priced', 'Sawed-off', 'Scattered',
      'School Bus Yellow', 'Scientific', 'Scooped-Neck', 'Screamin\' Green', 'Screaming', 'Screeching', 'Screwed-up', 'See-Through', 'Selective', 'Selective Yellow', 'Self-Absorbed', 'Self-Assured', 'Self-Centered',
      'Self-Confident', 'Self-Consumed', 'Self-Disciplined', 'Self-Entitled', 'Self-Inflated', 'Sensational', 'Sensitive', 'Sentimental', 'Sexy', 'Shaky', 'Shameless', 'Shivering', 'Shocking Pink', 'Short Sleeve',
      'Short-Haired', 'Short-Tempered', 'Shriveled', 'Sick', 'Sickened', 'Signature', 'Silky Soft', 'Single-Player', 'Sinister', 'Sizzling Sunrise', 'Skinny-Fit', 'Skunk-Proof', 'Slap Happy', 'Slimy', 'Slippery',
      'Small-Waisted', 'Smitten', 'Social-Oriented', 'Sophisticated', 'Sorrowful', 'Sparkling', 'Spectacular', 'Spine-Chilling', 'Spiritual', 'Spoiled Rotten', 'Spontaneous', 'Spring Bud', 'Squealing', 'Squeamish',
      'Standard-Fit', 'Startled', 'Startling', 'State-of-the-Art', 'Steadfast', 'Sticky', 'Stimulating', 'Story-Within-a-Story', 'Straightforward', 'Strapless', 'Strapping', 'Strategic', 'Strategizing',
      'Strawberry Blonde', 'Streamlined', 'Structural', 'Stubborn', 'Submissive', 'Substantial', 'Successful', 'Sugar Plum', 'Suggest a Word', 'Supercilious', 'Superficial', 'Supernatural', 'Supersoft',
      'Supersoldier', 'Superstitious', 'Supportive', 'Sure-Footed', 'Suspicious', 'Swift-Moving', 'Symmetrical', 'Sympathetic', 'Synthetic', 'Talking', 'Tart Orange', 'Tasteless', 'Temperamental', 'Terra Cotta',
      'Terrifying', 'Territorial', 'the Original', 'Thirst-Quenching', 'Thoughtful', 'Thoughtless', 'Threatening', 'Thrilling', 'Thundering', 'Ticked off', 'Tickle Me Pink', 'Tiny-Dick', 'Together Again', 'Top-Dollar',
      'Top-Heavy', 'Top-Level', 'Top-of-the-Line', 'Traditional', 'Trainable', 'Translucent', 'Treasured', 'Trembling', 'Tremendous', 'Trendsetting', 'Tripping', 'True-to-Size', 'Trustworthy', 'Tumbleweed', 'Twisted',
      'Two-Dimensional', 'Two-Faced', 'Ultra Pink', 'Unacceptable', 'Unaffected', 'Unapologetic', 'Unassuming', 'Unbalanced', 'Unbleached Silk', 'Uncertain', 'Uncooperative', 'Uncoordinated', 'Undependable',
      'Underhanded', 'Undersized', 'Understanding', 'Underweight', 'Unemotional', 'Unethical', 'Unexpected', 'Unfiltered', 'Unforgettable', 'Unforgiving', 'Unfriendly', 'Ungodly', 'Ungrateful', 'Unguarded',
      'Unhallowed', 'Unhelpful', 'Unholy', 'Unhurried', 'Unimaginative', 'Uninterested', 'Unjustifiable', 'Unlimited', 'Unlovable', 'Unmellow Yellow', 'Unmotivated', 'Unnatural', 'Unnerving', 'Unparalled',
      'Unpleasant', 'Unpopular', 'Unpredictable', 'Unreliable', 'Unsightly', 'Unsophisticated', 'Unthinking', 'Unthoughtful', 'Untruthful', 'Unwilling', 'up-to-No-Good', 'Uplifting', 'Useless', 'Vanilla', 'Vengeful',
      'Verbally Abusive', 'Versatile', 'Very Tactful', 'Very Well', 'Victorious', 'Vindictive', 'Violating', 'Violent', 'Viridian', 'Vivacious', 'Vivid Tangerine', 'Voiceless', 'Volt', 'Voluminous', 'Voluptuous',
      'Vulnerable', 'Waist-Slimming', 'Wandering', 'Warmhearted', 'Water-Resistant', 'Waterproof', 'Wear-Anywhere', 'Well-Balanced', 'Well-Behaved', 'Well-Bred', 'Well-Designed', 'Well-Developed', 'Well-Hopped',
      'Well-Intentioned', 'Well-Packaged', 'Well-Respected', 'Well-Rounded', 'Well-Trained', 'Whimsical', 'Whispering', 'White Trash', 'Wide-Eyed', 'Wild', 'Wild Blue Yonder', 'Wild Watermelon', 'Willing-to-Learn',
      'Wine', 'Wine Dreg', 'Wonderful', 'World-Renowned', 'Worrisome', 'Worthless', 'Wraithlike', 'Wrapped up', 'Xanadu', 'Yapping', 'Yarn-Dyed', 'Zippy', 'Zombie Like'
    );
    protected static $nouns = array(
      'Alphas', 'Amish', 'Amish Folks', 'Anchormen', 'Animals', 'Apaches', 'Apocalypse', 'Archers', 'Armpits', 'Arteries', 'Assailants', 'Asshats', 'Avatars', 'Avocados', 'Babes', 'Babushkas', 'Background Stories',
      'Backstabbers', 'Bad Striped Hyenas', 'Bag Ladies', 'Bagels', 'Baiters', 'Bartenders', 'Bastards', 'Bathrobes', 'Bears', 'Beasts', 'Beekeepers', 'Beetles', 'Beggars', 'Benedict Arnolds', 'Bifocals', 'Big Brothers',
      'Big Sisters', 'Big Sisters', 'Big-Bellies', 'Billionaires', 'Birds', 'Birthmarks', 'Bitches', 'Black Belts', 'Blondes', 'Blood Ragers', 'Bloodsuckers', 'Bobby Pins', 'Body Servants', 'Booby Traps', 'Bookworms',
      'Boozers', 'Bouncers', 'Boyfriends', 'Brains', 'Breeders', 'Brethren', 'Brides', 'Bridesmaids', 'Broads', 'Bros', 'Bubbles', 'Buddies', 'Bull-Headed Lovers', 'Bullets', 'Butterbeans', 'by-Products', 'Cabdrivers',
      'Cacti', 'Calling Cards', 'Candlestick Makers', 'Cannons', 'Cannons', 'Captors', 'Catchers', 'Cats', 'Centurions', 'Chauvinists', 'Cheerleaders', 'Chickens', 'Chinchillas', 'Chokers', 'Class Acts', 'Coaches',
      'Cockroaches', 'Coffee Pots', 'Combatants', 'Corn Cakes', 'Counterweights', 'Cousins', 'Cowards', 'Cowboys', 'Craters', 'Crazed Masters', 'Creators', 'Crew Members', 'Cupcakes', 'Custodians', 'Daughters',
      'Deadbeats', 'Death Wishes', 'Debris', 'Deer Antlers', 'Deerstalkers', 'Demons', 'Devils', 'Dingle Berries', 'Dirtbags', 'Dishrags', 'Dogs', 'Dominators', 'Doorknobs', 'Doormen', 'Dragons', 'Dreamers',
      'Drug Addicts', 'Druggies', 'Dudes', 'Dumplings', 'Earlobes', 'Earthquakes', 'Eggheads', 'Elastic Bands', 'Elves', 'Embroiderers', 'Enforcers', 'Eskimos', 'Ex-Husbands', 'Ex-Wives', 'Eyefuls',
      'Factory Reset Buttons', 'Failures', 'Fangs', 'Fathers', 'Faults', 'Females', 'Fighters', 'Fingernails', 'Fingers', 'Firefighters', 'Fireworks', 'Flight Attendants', 'Folks', 'Freaks', 'Freckles', 'Freemasons',
      'French Chefs', 'Frisbees', 'Fungus', 'Gargoyles', 'Gazeteers', 'Geese', 'Geese', 'Geezers', 'Geishas', 'Ghosts', 'Ghouls', 'Giraffes', 'Gladiators', 'Goalposts', 'Goo', 'Good Guys', 'Good Samaritans',
      'Good-for-Nothings', 'Governors', 'Granddads', 'Granddaughters', 'Grandmas', 'Grooms', 'Groomsmen', 'Gropers', 'Grouches', 'Guests', 'Guns', 'Hairdressers', 'Heartbreakers', 'Heaters', 'Heiresses', 'Hellians',
      'Henchmen', 'Heroes', 'Hissy Fits', 'Hitmen', 'Holders', 'Honeybees', 'Hookers', 'Horsemen', 'Hostages', 'Hot Dogs', 'House Sitters', 'Human Beings', 'Humans', 'Hunters', 'Hush Puppies', 'Hydrants', 'Ice Skaters',
      'Identifiers', 'Idiots', 'Inhabitants', 'Inmates', 'Innocents', 'Instructors', 'Intruders', 'Investigators', 'Investors', 'Islanders', 'Jackasses', 'Jailers', 'Jellyfish', 'Jerks', 'Jezebels', 'Judges', 'Junkies',
      'Kids', 'Killer Bees', 'Kinsmen', 'Kissers', 'Kittens', 'Kitties', 'Kitty Cats', 'Kneelers', 'Knights', 'Knives', 'Laddies', 'Ladies', 'Lady Friends', 'Ladyboys', 'Lambskins', 'Landowners', 'Laser Beams', 'Lasses',
      'Legends', 'Liars', 'Lions', 'Little Brothers', 'Little Sisters', 'Lords', 'Louses', 'Lowlanders', 'Lunatics', 'Lunkheads', 'Lurkers', 'Machetes', 'Mages', 'Males', 'Manholes', 'Maniacs', 'Manicurists',
      'Manservants', 'Marauders', 'Maroons', 'Marzipans', 'Mashed Potatoes', 'Meatballs', 'Men-at-Arms', 'Meter Maids', 'Mice', 'Millionaires', 'Mimes', 'Minimalists', 'Mistakes', 'Mistresses', 'Moms', 'Monkeys',
      'Morons', 'Movie Stars', 'Movie Stars', 'Murderers', 'Mutes', 'Narrators', 'Neanderthals', 'Newbies', 'Nightsticks', 'Ninjas', 'Noblemen', 'Noblewomen', 'Oarsmen', 'Occupants', 'Onlookers', 'Orchids', 'Ovaries',
      'Paladins', 'Pantsuits', 'Paper Plates', 'Paramedics', 'Parents', 'Passengers', 'Patrolmen', 'Peacocks', 'Pearl Divers', 'Peepholes', 'Penguins', 'Penlights', 'People', 'Perpetrators', 'Personalities', 'Perverts',
      'Pied Pipers', 'Piglets', 'Pillowcases', 'Pistols', 'Pixies', 'Polka Dots', 'Pooches', 'Poppets', 'Portholes', 'Posers', 'Potatos', 'Potheads', 'Pouches', 'Powerhouses', 'Predators', 'Preteens', 'Prisoners',
      'Private Investigators', 'Psychiatrists', 'Psychics', 'Psychopaths', 'Puddle-Jumpers', 'Pumps', 'Puppets', 'Puppies', 'Pushcarts', 'Pussycats', 'Puzzlers', 'Queens', 'Raccoons', 'Ragamuffins', 'Raiders', 'Readers',
      'Real Estate Agents', 'Redheads', 'Rednecks', 'Reps', 'Respirators', 'Riptide', 'Rock-and-Rollers', 'Rolling Papers', 'Rookies', 'Roomies', 'Roommates', 'Rough-Skinned Newts', 'Runaways', 'Sandwiches', 'Scanners',
      'Scavengers', 'Scientists', 'Scots', 'Secret Agents', 'Shafters', 'Shepherds', 'Shifters', 'Shin Guards', 'Shinbones', 'Shotguns', 'Singers', 'Sirs', 'Skinny Women', 'Skullcaps', 'Slapshots', 'Sleazeballs',
      'Slingshots', 'Slovenians', 'Smokers', 'Snapshots', 'Sneaky Criminals', 'Snipers', 'Snuggle Bugs', 'Soldiers', 'Sons', 'Sonsabitches', 'Spawn', 'Speakers', 'Specimens', 'Spenders', 'Squads', 'Squiggles',
      'Stableboys', 'Staff Members', 'Stalkers', 'Stallions', 'Steeds', 'Stewards', 'Sticklers', 'Stockers', 'Striped Hyenas', 'Studettes', 'Studs', 'Submissives', 'Sunflowers', 'Supervisors', 'Swabs', 'Sweethearts',
      'Switch-Hitters', 'Swordsmen', 'Sympathizers', 'Tailpipes', 'Tailpipes', 'Tanks', 'Tarantulas', 'Teachers', 'Teacups', 'Technicians', 'Teddy Bears', 'Teenagers', 'Terriers', 'Thinkers', 'Throwbacks', 'Tigers',
      'Toasters', 'Toilet Seats', 'Toilet Seats', 'Tomatoes', 'Toothpicks', 'Torchbearers', 'Tornadoes', 'Tough Guys', 'Tourniquets', 'Townies', 'Trainers', 'Trainers', 'Travel Guides', 'Trawlers', 'Trolls', 'Tugboats',
      'Turkey Wings', 'Turkeys', 'Undercurrents', 'Unitarians', 'Unmentionables', 'Vampires', 'Vandals', 'Vegetables', 'Ventriloquists', 'Victorians', 'Villains', 'Voyeurs', 'Waiters', 'Waitresses', 'Warriors', 'Watchers',
      'Weed Whackers', 'Welders', 'Whisperers', 'Whitefish', 'Widows', 'Wildcats', 'Wipers', 'Wives', 'Wizards', 'Wolfmen', 'Wolves', 'Workmen', 'Wrinkles', 'Yugoslavians', 'Zombies'
    );

    public static function adjective()
    {
        return static::randomElement(static::$adjectives);
    }

    public static function noun()
    {
        return static::randomElement(static::$nouns);
    }

    public function teamName()
    {
        $format = '{{adjective}} {{noun}}';

        return $this->generator->parse($format);
    }

}