<?php
$this->title('Contact Us');
?>
<div class="contact-banner">
    <div class="contact-banner-title">Contact Us</div>
</div>
<div class="contact-section">
    <div class="left-box">
        <div class="left-box-content">
            <div class="contact-item">
                <div class="contact-item-icon"><span><img src="../img/address-icon.png"/></span></div>
                <div class="contact-item-content">
                    <div class="contact-item-title">Office</div>
                    <div class="contact-item-text">
                    5 Great Valley Pkwy STE 100, Malvern, PA 19355
                    </div>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon"><span><img src="../img/phone-icon.png"/></span></div>
                <div class="contact-item-content">
                    <div class="contact-item-title">Telephone</div>
                    <div class="contact-item-text">
                        (610)643-4881<br>
                    </div>
                    <div class="contact-item-title" style="margin-top:20px">Fax</div>
                    <div class="contact-item-text">
                        (610)910-3487<br>
                    </div>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon"><span><img src="../img/email-icon.png"/></span></div>
                <div class="contact-item-content">
                    <div class="contact-item-title">E-mail</div>
                    <div class="contact-item-text">
                    <a href="mailto:info@biopeptek.com">info@biopeptek.com</a>
                    </div>
                </div>
            </div>
            <div class="media" style="margin-top:110px;">
                <div><a href="https://www.linkedin.com/company/biopeptekpharmaceuticals/"><img src="/img/icons8-linkedin-2-64.png"/></a></div>
            </div>
        </div>
    </div>
    <div class="right-box" id="form">
        <div class="right-box-content">
            <div class="contact-input-section">
                <div class="contact-input-item" style="padding-right:12px;">
                    <p>First Name<span>*</span></p>
                    <input class="contact-input firstName"/>
                </div>
                <div class="contact-input-item" style="padding-left:12px;">
                    <p>Last Name<span>*</span></p>
                    <input class="contact-input lastName"/>
                </div>
            </div>
            <div class="contact-input-item">
                <p>Company Name<span>*</span></p>
                <input class="contact-input company"/>
            </div>
            <div class="contact-input-item">
                <p>Job Title</p>
                <input class="contact-input job"/>
            </div>
            <div class="contact-input-item">
                <p>Email<span>*</span></p>
                <input class="contact-input email"/>
            </div>
            <div class="contact-input-item">
                <p>Phone</p>
                <input class="contact-input phone"/>
            </div>
            <div class="contact-input-item">
                <p>Comments<span>*</span></p>
                <input class="contact-input comments"/>
            </div>

            <div class="submit-btn">Submit</div>
        </div>
    </div>

</div>
<script>
    function validateEmail (email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}
    $('.submit-btn').click(function(e) {
        let firstName = $('.firstName').val();
        let lastName = $('.lastName').val();
        let company = $('.company').val();
        let job = $('.job').val();
        let phone = $('.phone').val();
        let email = $('.email').val();
        let comments = $('.comments').val();
        if (!firstName) {
            alert("Please enter your first name")
            return;
        } else if (!lastName) {
            alert("Please enter your last name")
            return;
        } else if (!company) {
            alert("Please enter your company name")
            return;
        } else if (!email) {
            alert("Please enter your email")
            return;
        } else if (!comments) {
            alert("Please enter your comments")
            return;
        }
        if (!validateEmail(email)) {
			alert("Please enter a valid email")
            return;
		}
        $('#spinner').show();
        $.ajax({
            url: 'https://www.mainlinebiosciences.com/api/business/biopeptekNotification',
            dataType: 'json',
            type: 'post',
            data: JSON.stringify ({
                name: firstName + ' ' + lastName,
                company: company,
                job: job,
                phone: phone,
                email: email,
                comments: comments
            }),
            contentType: "application/json",
            success: function( response, textStatus, jQxhr ){
                $('#spinner').hide();
                if (response.result) {
                    alert("Thank you for reaching out. We have received your request. We will get back to you as soon as possible.")
                    $('.firstName').val('')
                    $('.lastName').val('');
                    $('.company').val('');
                    $('.job').val('');
                    $('.phone').val('');
                    $('.email').val('');
                    $('.comments').val('');
                } else {
                    alert("Thank you for reaching out. We have received your request. We will get back to you as soon as possible.")
                }

            },
            error: function( jqXhr, textStatus, errorThrown ){
                $('#spinner').hide();
                console.log( errorThrown );
            }
        });
    })
</script>