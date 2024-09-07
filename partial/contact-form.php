<div class="form-wrapper">
    <h4 class="message-header">
        <span>Send us a message</span>
        <i class="fas fa-regular fa-envelope message-icon"></i>
    </h4>
    <form id="contactForm" method="POST" enctype="multipart/form-data" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="yourname"
                        placeholder="Enter your name" required>
                    <label for="floatingInput">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                        required>
                    <label for="email">Email Address</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="phone" name="phone"
                        placeholder="Enter your phone number" required>
                    <label for="phone">Phone Number</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="company" name="company"
                        placeholder="Enter your company">
                    <label for="company">Company</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Enter your message"
                required style="height: auto;"></textarea>
            <label for="message">Message</label>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary"
                style="background-color: #5867DD; border-color: #5867DD; padding-left: 25px; padding-right: 25px;">Send</button>
        </div>
    </form>
</div>