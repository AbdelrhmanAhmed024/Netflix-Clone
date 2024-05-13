const languageSelector = document.getElementById("language-selector");
languageSelector.addEventListener("change", function () {
    if (languageSelector.value === "ar") {
        document.dir = "rtl";
        translateToArabic();
    } else {
        document.dir = "ltr";
        translateToEnglish();
    }
});

function translateToArabic() {
    document.getElementById('SI').textContent = 'تسجيل الدخول';
    document.getElementById('EA').textContent = 'عنوان البريد الإلكتروني';
    document.getElementById('PW').textContent = 'كلمة المرور';
    document.getElementById('RM').textContent = 'تذكرنى';
    document.getElementById('NH').textContent = 'تحتاج للمساعدة؟';
    document.getElementById('SI2').textContent = 'تسجيل الدخول';
    document.getElementById('NTN').textContent = 'جديد على Netflix؟';
    document.getElementById('SUN').textContent='التسجيل الآن.';
    document.getElementById('T1').textContent = 'ذه الصفحة محمية بواسطة خدمة reCAPTCHA من Google لضمان أنك لست إنسانًا آليًا.';
    document.getElementById('learn-more-btn').textContent = 'تعرّف على المزيد.'
    document.getElementById('T2').textContent = 'تخضع المعلومات التي تجمعها خدمة reCAPTCHA من Google إلى';
    document.getElementById('PP').textContent = 'سياسة الخصوصية';
    document.getElementById('AD').textContent = 'و';
    document.getElementById('T3').textContent = 'المعمول بهما لدى Google، وتُستخدم لتقديم خدمة reCAPTCHA وصيانتها وتحسينها، فضلاً عن أغراض الأمان العامة (لا تُستخدم لأغراض تقديم الإعلانات المخصصة بواسطة Google).';
    document.getElementById('CUN').textContent='هل لديك أسئلة؟ اتصل بنا.';
    document.getElementById('FAQ').textContent = 'الأسئلة الشائعة';
    document.getElementById('HC').textContent = 'مركز خدمة العملاء';
    document.getElementById('TOU').textContent = 'بنود الاستخدام';
    document.getElementById('PY').textContent = 'الخصوصية';
    document.getElementById('CP').textContent = 'تفضيلات الكوكيز';
    document.getElementById('CI').textContent = 'معلومات الشركة';
}
function translateToEnglish() {
    document.getElementById('SI').textContent = 'Sign In';
    document.getElementById('EA').textContent = 'Email Address';
    document.getElementById('PW').textContent = 'Password';
    document.getElementById('RM').textContent = 'Remember Me';
    document.getElementById('NH').textContent = 'Need Help?';
    document.getElementById('SI2').textContent = 'Sign In';
    document.getElementById('NTN').textContent = 'New to Netflix?';
    document.getElementById('SUN').textContent='Sign Up Now';
    document.getElementById('T1').textContent = "This page is protected by Google reCAPTCHA to ensure you're not a bot.";
    document.getElementById('learn-more-btn').textContent = 'Learn More'
    document.getElementById('T2').textContent = 'The information collected by Google reCAPTCHA is subject to the Google';
    document.getElementById('PP').textContent = 'Privacy Policy';
    document.getElementById('AD').textContent = 'and';
    document.getElementById('T3').textContent = ', and is used for providing, maintaining, and improving the reCAPTCHA service and for general security purposes (it is not used for personalized advertising by Google).';
    document.getElementById('CUN').textContent='Questions? Contact us now.';
    document.getElementById('FAQ').textContent='FAQ';
    document.getElementById('HC').textContent='Help Center';
    document.getElementById('TOU').textContent='Terms of Use';
    document.getElementById('PY').textContent='Privacy';
    document.getElementById('CP').textContent='Cookie Preferences';
    document.getElementById('CI').textContent='Coporate Information';

}

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password-input");
    var toggleButton = document.querySelector(".toggle-button");
    
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
    } else {
      passwordInput.type = "password";
      toggleButton.innerHTML = '<i class="fa fa-eye"></i>';
    }
  }