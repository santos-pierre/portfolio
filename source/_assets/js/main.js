import 'alpinejs';
import i18next from "i18next";
import englishTranslation from "./../../lang/en/en.json";
import frenchTranslation from "./../../lang/fr/fr.json";

i18next.init(
    {
      compatibilityJSON: "v3",
      lng: "en",
      debug: false,
      resources: {
        en: {
          translation: englishTranslation
        },
        fr: {
          translation: frenchTranslation
        }
      }
    },
    function (err, t) {
      // initialized and ready to go!
      //console.log(err);
    }
  );

  window.langRessources = function() {
    return {
        currentLang: "en",
        lang: getRessourceByLang(i18next, "en"),
        changeLanguage(lang) {
          this.currentLang = lang;
          this.lang = getRessourceByLang(i18next, this.currentLang);
        }
      };
  }

  function getRessourceByLang(ressources, lang) {
    let { translation } = ressources.getDataByLanguage(lang);
    return translation;
  }