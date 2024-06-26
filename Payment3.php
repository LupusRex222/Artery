<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Payment.css">
</head>
<body>
    <div class="content">
        <!-- Barisannya cartoon maker course -->
        <div class="container">
            <div class="row">
              <div class="col-4">
                <img src="Images/Starry.jpg">
              </div>
              <div class="col-8">
                  <h1>Cartoon Maker Course</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent cursus aliquet nibh, eget porta erat aliquet in. Vestibulum hendrerit, est in fermentum tempor, nibh massa fermentum orci, ac dapibus neque diam ac lorem. Ut finibus eu odio id imperdiet. Duis turpis neque, condimentum id convallis nec, interdum ac odio. Integer.</p>
              </div>
            </div>
        </div>

        <!-- Barisannya 15$ -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                  <h3>15 $</h3>
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>

        <!-- Account Information -->
        <div class="container">
            <h5>Account Information</h5><br>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input class="form-control" type="text" placeholder="Name" aria-label="default input">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name" aria-label="default input">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Email</label>
                        <input class="form-control" type="text" placeholder="Email" aria-label="default input">
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>

        <!-- Payment Information -->
        <div class="container">
            <h5>Payment Information</h5><br>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Card Number" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Month</label>
                        <input class="form-control" type="text" placeholder="Month" aria-label="default input">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Year</label>
                        <input class="form-control" type="text" placeholder="Year" aria-label="default input">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="Name" class="form-label">CVV</label>
                        <input class="form-control" type="text" placeholder="CVV" aria-label="default input">
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
