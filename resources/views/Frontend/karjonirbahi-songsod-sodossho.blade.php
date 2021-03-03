@include('Frontend.include.header')
    <section class="body-content">
        <div class="row">
            <div class="d-lg-flex">
                <div class="col-lg-9 col-12 pad-0">
                    <div class="word">
                        <h5>ঢাকা মহানগর দক্ষিণ আওয়ামী লীগ কার্যনির্বাহী সংসদ সদস্য (২০১৯-২০২২)</h5>
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
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>ব্যরিস্টার শেখ ফজলে নুর তাপস</td>
                                    <td>সদস্য</td>
                                    <td>মোবাইল নম্বর: ০১৮১১৪৮৩৬০০</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>মোঃ সাহে আলম মুরাদ</td>
                                    <td>সদস্য</td>
                                    <td>মোবাইল নম্বর: ০১৭১৬৪৮৬৫২১</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>আলহাজ মোঃ আবুল বাশার </td>
                                    <td>সদস্য</td>
                                    <td>মোবাইল নম্বর: ৯৩৩০২৪৮ (বাসা) ০১৭১১৫২৭৮০১</td>
                              </tr>
                              <tr>
                                  <td><img src="{{asset('/')}}frontend/images/man-icon.png" alt="man-icon"></td>
                                    <td>সালাউদ্দিন বাদল</td>
                                    <td>সদস্য</td>
                                    <td>মোবাইল নম্বর:৭১১৭৯৪৩ (বাসা) ০১৭১৭২১৭৩৪৭</td>
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