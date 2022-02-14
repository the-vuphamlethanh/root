<?php
$data = array(
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    ),
    array(
        "image"=>"https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png",
        "name"=>"iPhone 13 pro",
        "price" => 13990000,
        "review" => array(
            array(
                "customerId" => "customer 011",
                "rating"=> 4,
                "text" => "Very nice1!"
            )
        )
    )
);
$reviewHtml = "";
$html = "";
foreach ($data as $phone => $phoneVal) {
    $qtyReview = 0;
    $qtyRating = 0;
    $ratingHtml = "";
    
    foreach($phoneVal["review"] as $itemReview => $review){
        $qtyReview +=1;
        $qtyRating += $review["rating"];
    };
    (float)$rating = ($qtyRating / $qtyReview);
    
    for ($x = 1; $x < $rating; $x++) {
        $ratingHtml .= '<ion-icon class="star" name="star"></ion-icon>';
      }
      if($rating != $x){
        $ratingHtml .= '<ion-icon class="star" name="star-half"></ion-icon>';
      }else{
        $ratingHtml .= '<ion-icon class="star" name="star"></ion-icon>';
      }
    $htmlProducts ='
        <div class="col-md-3 faCard"> 
        <div class="card text-center">
        <img src="'.$phoneVal["image"].'" alt="Product image" style="width:100%">
        <h3>'.$phoneVal["name"].'</h3>
        <p class="price">'.$phoneVal["price"].'đ</p>
        <p><button class="buyNow">Buy now</button></p>
        </div>
        </div>';
        $html .= $htmlProducts;
};
if (isset($_GET['get'])) {
    $get = $_GET["get"];
     $reviewHtml = displayReview($get,$data) ;
}

function displayReview($get,$data) {
    $reviewHtml = '';
    foreach ($data as $phone => $phoneVal){
        if($phoneVal["name"] == $get){
            foreach($phoneVal["review"] as $itemReview => $review){
                $star = "";
                for ($x = 1; $x <= $review["rating"]; $x++) {
                    $star .= '<ion-icon class="star" name="star"></ion-icon>';
                  };
                $reviewHtml .= '
                <div class="col-md-3"> 
                <div class="itemReview text-left">
                <h3>'.$review["customerId"].'</h3>
                <p>'.$star.'</p>
                <p>'.$review["text"].'</p>
                </div>
                </div>';
            }
        }
    }
    return $reviewHtml;
  }
 
  
?>
