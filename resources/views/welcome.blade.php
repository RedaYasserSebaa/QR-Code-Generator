<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            background-image: url(assets/img/back2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* .card1{
            background-color: rgba(0, 0, 0, 0);
        } */
    </style>
</head>
<body>
    <div class="container mt-5 card1">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">QR Code Generator</h1>

                        <form id="myForm" action="/generate-qrcode" method="GET"    >
                             @csrf
                            <div class="mb-3"><label for="data" class="form-label">Enter URL for QR code:</label>
                                <input type="text" id="myInput" placeholder="Enter a URL" class="form-control" name="data" id="data" value="" required>
                                <!-- <input type="submit" value="Submit"> -->
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">Generate QR Code</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </form>        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
