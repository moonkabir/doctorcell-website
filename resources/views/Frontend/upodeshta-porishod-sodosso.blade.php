@include('Frontend.include.header')
    <section class="body-content">
        <div class="row">
            <div class="d-lg-flex">
                <div class="col-lg-9 col-12 pad-0">
                    <div class="word">
                        <h5>উপদেষ্টা পরিষদ সদস্য <br/>ঢাকা মহানগর দক্ষিণ আওয়ামী লীগ কার্যনির্বাহী সংসদ (২০১৯-২০২২)</h5>
                        <table class="bordered officerlist" width="100%">
                            <thead>
                                <tr>
                                    <td>ছবি</td>
                                    <td>নাম</td>
                                    <td>মোবাইল নম্বর</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>আব্দুল হক সবুজ</td>
                                    <td>মোবাইল নম্বর: ০১৭১১৬৬৩৪১১ ০১৫৫২৩৩৪৮২০</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>হাজী সেলিম এমপি</td>
                                    <td>মোবাইল নম্বর: ০১৮১৯২৫৯৯২৯</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>কামাল চৌধুরী</td>
                                    <td>মোবাইল নম্বর: ১৮১৯২২১৯০৭</td>
                              </tr>
                              <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>অ্যাড. মোহাম্মদ ফোরকান মিঞা</td>
                                    <td>মোবাইল নম্বর:০১৭১১৪৫৩২৫৬ ০১৯২৪৫৪৩২৪০</td>
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