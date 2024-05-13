const languageSelector = document.getElementById("language-selector");
      languageSelector.addEventListener("change", function () {
        if (languageSelector.value === "ar") {
          document.dir = "rtl";
        } else {
          document.dir = "ltr";
        }
      });
const languageSelect = document.getElementById('language-selector');
languageSelect.addEventListener('change', function () {
  const selectedLanguage = languageSelect.value;

  if (selectedLanguage === 'ar') {
    translateToArabic();
  } else {
    translateToEnglish();
  }
});
function translateToArabic() {
document.getElementById('JNIE').textContent='الاشتراك في Netflix أمر سهل.';
document.getElementById('ENYP').textContent='أدخل كلمة المرور وستبدأ المشاهدة في الحال.';
document.getElementById('UN').textContent='اسم المستخدم';
document.getElementById('EM').textContent='البريد الالكترونى';
document.getElementById('PW').textContent='كلمة المرور';
document.getElementById('CPW').textContent='تأكيد كلمة المرور';
document.getElementById('ST').textContent='اشتراك';
document.getElementById('CUS').textContent='هل لديك أسئلة؟ اتصل بنا.';
document.getElementById('FAQ').textContent='الأسئلة الشائعة';
document.getElementById('HC').textContent='مركز خدمة العملاء';
document.getElementById('TOU').textContent='بنود الاستخدام';
document.getElementById('PY').textContent='الخصوصية';
document.getElementById('CP').textContent='تفضيلات الكوكيز';
document.getElementById('CI').textContent='معلومات الشركة';
}
function translateToEnglish() {
  document.getElementById('JNIE').textContent='Joining Netflix is easy.';
  document.getElementById('ENYP').textContent="Enter your password and you'll be watching in no time.";
  document.getElementById('UN').textContent='Username';
  document.getElementById('EM').textContent='Email Address';
  document.getElementById('PW').textContent='Password';
  document.getElementById('CPW').textContent='Confirm Password';
  document.getElementById('ST').textContent='Submit';
  document.getElementById('CUS').textContent='Questions? Contact us now.';
  document.getElementById('FAQ').textContent='FAQ';
  document.getElementById('HC').textContent='Help Center';
  document.getElementById('TOU').textContent='Terms of Use';
  document.getElementById('PY').textContent='Privacy';
  document.getElementById('CP').textContent='Cookie Preferences';
  document.getElementById('CI').textContent='Coporate Information';
}