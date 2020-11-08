<div class=" flex absolute top-0 left-0 text-cool-gray-200 text-lg font-medium md:ml-24 ml-5 mt-10">
    <template x-if="currentLang === 'en'">
        <img src="./../assets/images/france.svg" alt="" class="h-6 w-6 cursor-pointer" @click="changeLanguage('fr')" />
    </template>
    <template x-if="currentLang === 'fr'">
        <img src="./../assets/images/united-kingdom.svg" alt="" class="h-6 w-6 cursor-pointer" @click="changeLanguage('en')" />
    </template>
</div>