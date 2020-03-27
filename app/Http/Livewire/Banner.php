<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $banner;
    public function mount()
    {
        $this->banner=["Don't Hoard groceries and essentials. Please ensure that people who are in need don't face a shortage because of you! ",
"Be compassionate! Help those in need like the elderly and poor. They are facing a crisis you cannot even imagine!",
"Be considerate : While buying essentials remember : You need to share with 130 Crore Others! ",
"Going out to buy essentials? Social Distancing is KEY! Maintain 2 metres distance between each other in the line. ",
 "Plan ahead! Take a minute and check how much you have at home. Planning ahead let's you buy exactly what you need! ",
 "Plan and calculate your essential needs for the next three weeks and get only what is bare minimum needed. ",
"Help out the elderly by bringing them their groceries and other essentials. ",
"Help out your workers and domestic workers by not cutting their salaries. Show the true Indian spirit! ",
"Lockdown means LOCKDOWN! Avoid going out unless absolutely necessary. Stay safe! ",
"Panic mode : OFF! ❌\nESSENTIALS ARE ON! ✔️ ","Do not panic! ❌ Your essential needs will be taken care of. DO NOT HOARD. ","Be a true Indian. Show compassion. Be considerate. Help those in need. We will get through this!","If you have symptoms and suspect you have coronavirus - reach out to your doctor or call state helplines. 📞  Get help. ","Stand Against FAKE News and WhatsApp Forwards! Do NOT ❌ forward a message until you verify the content it contains. ","If you have any queries, reach out to your district administration or doctors! ","Wash your hands with soap and water often. Keep the virus at bay.","The hot weather will not stop the virus! You can! Stay home, stay safe.","Help the medical fraternity by staying at home! ","Avoid going out during the lockdown. Help break the chain of spread.","Call up your loved ones during the lockdown, support each other through these times.",];
    }
    public function render()
    {
        return view('livewire.banner');
    }
}
