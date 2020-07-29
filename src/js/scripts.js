import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();

import isMobile from './helpers/ismobile';
isMobile() && document.documentElement.classList.add('-mobile');

document.querySelectorAll('a[href*="#"]').forEach(item => {
    const anchor = item.getAttribute('href');
    const element = document.querySelector(anchor);

    item.addEventListener('click', event => {
        event.preventDefault();

        window.scrollTo({
            top: element.offsetTop,
            behavior: 'smooth',
        });
    });
});

// region UI
import AccordionCollection from './components/ui/Accordion';
import DropdownCollection from './components/ui/Dropdown';
import InputCollection from './components/ui/Input';
import ModalCollection from './components/ui/Modal';
import NumberPickerCollection from './components/ui/NumberPicker';
import SelectCollection from './components/ui/Select';
import SliderCollection from './components/ui/Slider';
import TabbarCollection from './components/ui/Tabbar';
import VideoModalCollection from './components/ui/VideoModal';
// endregion

// region MODULES
import HeaderCollection from './components/modules/Header';
import SpeakerCardCollection from './components/modules/SpeakerCard';
// endregion

// region OTHER COMPONENTS
import Checkout from './components/Checkout';
// endregion
