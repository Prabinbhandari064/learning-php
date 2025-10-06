भाग १: आधारभूत सिन्ट्याक्स अभ्यास (१० मिनेट)

intro.php नामको नयाँ फाइल बनाउनुहोस्।

यसमा निम्न काम गर्नुहोस्:

एउटा $name चलराशीमा आफ्नो नाम राख्नुहोस्।

$age (पूर्णांक), $height (float), $isStudent (boolean) चलराशिहरू बनाउनुहोस्।

यी सबै मानहरूलाई echo प्रयोग गरेर ब्राउजरमा देखाउनुहोस्।

$height लाई int मा टाइप कास्ट गरेर परिणाम देखाउनुहोस्।

👉 Expected Output Example:

Name: Bibek  
Age: 21  
Height: 5.9  
Is Student: 1  
Height as integer: 5

🧮 भाग २: एरे र लूप (१५ मिनेट)

arrays.php नामको फाइल बनाउनुहोस्।

एक संख्यात्मक एरे ($fruits) बनाउनुहोस् जसमा ५ वटा फलका नाम राख्नुहोस्।

foreach लूप प्रयोग गरी सबै फलहरू प्रिन्ट गर्नुहोस्।

एक एसोसिएटिभ एरे ($person) बनाउनुहोस् जसमा name, age, city key/value राख्नुहोस्।

for वा while लूप प्रयोग गरी एसोसिएटिभ एरेका सबै key/value जोडीहरू प्रिन्ट गर्नुहोस्।

👉 Expected Output Example:

Apple  
Banana  
Orange  
Mango  
Grapes  

name => Bibek  
age => 21  
city => Pokhara

🧠 भाग ३: फंक्शन अभ्यास (१० मिनेट)

functions.php नामको फाइल बनाउनुहोस्।

greetUser($name) भन्ने एउटा फंक्शन बनाउनुहोस् जसले Hello, <name>! भनेर फर्काउँछ।

उक्त फंक्शनलाई दुई फरक नामका साथ बोलाउनुहोस्।

addNumbers($a, $b) भन्ने अर्को फंक्शन बनाउनुहोस् जुन दुई संख्या लिएर तिनीहरूको योग फर्काउँछ।

उक्त फंक्शनलाई तीन पटक फरक मानका साथ चलाएर परिणाम देखाउनुहोस्।

👉 Expected Output Example:

Hello, Bibek!  
Hello, Rachana!  
3 + 5 = 8  
10 + 15 = 25  
7 + 13 = 20

🧱 भाग ४: वस्तु-उन्मुख प्रोग्रामिङ (१५ मिनेट)

oop.php नामको फाइल बनाउनुहोस्।

WeatherChecker भन्ने एउटा क्लास बनाउनुहोस् जसमा:

एउटा property $city
 
constructor जसले $city सेट गर्छ

getWeather() भन्ने एउटा method जसले <city> को मौसम डाटा उपलब्ध छैन। भनेर फर्काउँछ।

यस क्लासबाट दुईवटा object बनाउनुहोस् (जस्तै Pokhara र Kathmandu का लागि) र getWeather() मेथड चलाउनुहोस्।

👉 Expected Output Example:

Pokhara को मौसम डाटा उपलब्ध छैन।  
Kathmandu को मौसम डाटा उपलब्ध छैन।
prabin