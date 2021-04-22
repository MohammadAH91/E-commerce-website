<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--source: http://www.html-5.com/metatags/index.html-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--source:https://www.w3schools.com/css/css_rwd_viewport.asp-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload | Page</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--Header & Uploads Product Details Form-->
    <?php include('./includes/header.php')?>
    <main id="main-upload">
        <form 
            id="form-upload"
            action="./upload-post.php" 
            method="post" 
            enctype="multipart/form-data">
            <div>
                <label>Name</label>
                <input 
                    name="name"  
                    type="text" 
                    placeholder="Enter product name">
            </div>
            <div>
                <label>Brand</label>
                <input 
                    name="brand"  
                    type="text" 
                    placeholder="Enter product brand">
            </div>
            <div>
                <label>Price</label>
                <input 
                    name="price"  
                    type="number" 
                    placeholder="Enter product price"
                    step=".01">
            </div>
            <div>
                <label>Memory size</label>
                <input 
                    name="ram"  
                    type="number" 
                    placeholder="Enter memory size">
            </div>
            <div>
                <label>Disk capacity</label>
                <input 
                    name="disk_capacity"  
                    type="number" 
                    placeholder="Enter disk capacity">
            </div>
            <div>
                <label>Disk type</label>
                <select 
                    name="disk_type">
                    <option value="HDD">HDD</option>
                    <option value="SSD">SSD</option>
                </select>
            </div>
            <div>
                <label>Description</label>
                <textarea name="description" cols="30" rows="10">
    
                </textarea>
            </div>
            <div>
                <label>Rating</label>
                <input 
                    name="rating"  
                    type="number" 
                    placeholder="Enter product rating">
            </div>
            <div>
                <label>Image</label>
                <input 
                    name="image" 
                    type="file">
            </div>
            <div>
                <button id="btn-submit">Upload</button>
            </div>
        </form>
    </main>
    <!--Footer-->
    <?php include('./includes/footer.php')?>
</body>
</html>