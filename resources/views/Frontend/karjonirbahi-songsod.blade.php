@include('Frontend.include.header')
    <section class="body-content">
        <div class="row">
            <div class="d-lg-flex">
                <div class="col-lg-9 col-12 pad-0">
                    <div class="word">
                        <h5>ঢাকা মহানগর দক্ষিণ আওয়ামী লীগ কার্যনির্বাহী সংসদ (২০১৯-২০২২)</h5>
                        <table class="bordered officerlist" width="100%">
                            <thead>
                                <tr>
                                    <td>ছবি</td>
                                    <td>নাম</td>
                                    <td>পদবি</td>
                                    <td>মোবাইল নম্বর</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/sovapoti2.jpg" alt="man-icon"></td>
                                    <td>বীর মুক্তিযোদ্ধা আবু আহমেদ মন্নাফী</td>
                                    <td>সভাপতি</td>
                                    <td>মোবাইল নম্বর: ০১৭১১১৪৮০১০ ০১৯৭১১৪৮০১০ ০১৬৭৫০০৭৪৭৮ </br>ফোন: ৭১২০১৫২ (বাসা)</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/secretary2.jpg" alt="man-icon"></td>
                                    <td>আলহাজ্ব মোহাম্মদ হুমায়ুন কবির</td>
                                    <td>সাধারণ সম্পাদক</td>
                                    <td>মোবাইল নম্বর: ০১৯১৯২১৮৫৭০ </br>ফোন: ৯৬৬৫১৩৯ (বাসা)</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>নুরুল আমিন রুহুল এমপি</td>
                                    <td>সহ-সভাপতি</td>
                                    <td>মোবাইল নম্বর: ০১৭১৫০৭৬৮০৭</td>
                              </tr>
                              <tr>
                                  <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>ডা. দিলীপ কুমার রায়</td>
                                    <td>সহ-সভাপতি</td>
                                    <td>মোবাইল নম্বর:০১৭১২০৬৬৯২৩</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-12 pad-0">
                @include('Frontend.include.right-sidebar')
                </div>
            </div>
        </div>
    </section>
    @include('Frontend.include.footer')