# Accordion content element for TYPO3 CMS
This extension provides a lightweight accordion content element for TYPO3 CMS.

The benefits of using this extension:
  * Lightweight; It does not depend on a heavy JavaScript framework (i.e.: jQuery, Bootstrap, …).
  * Beginners can include assets directly via static TypoScript include.
  * Advanced developers can integrate required assets into their task runner of choice.
  * Completely build as a fluid template instead of TypoScript for easier maintenance and customization.
  * CSS classes are configurable via TypoScript; For simple class changes, you don't need to extract the whole template.

**ATTENTION: This extension is currently in development and not ready to use unless you're writing your own CSS and JS completely!**

## How to use
This extension depends on gridelements and won't work without it.

### Setup
#### Beginner mode
If you're managing TypoScript and PageTS configurations through database records (i.e.: inside the "Template" backend module), you simply need to to the following:
  * Include the rendering TypoScript from this extension
  * Include the assets TypoScript from this extension
  * Include the PageTS configuration from this extension

And that's it, you're ready to use accordions, but might add custom CSS.

#### Developer mode
If you're managing configurations and assets with your own workflow, you need to load the rendering TypoScript configuration:
```
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_accordion/Configuration/TypoScript/Setup/Rendering.txt">
```
If you want to have assets included the TYPO3 way, you'd also add the following line:
```
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_accordion/Configuration/TypoScript/Setup/Assets.txt">
```
Alterntatively, you add assets to your task runner.

Also, PageTS is required:
```
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_accordion/Configuration/TypoScript/PageTS/Configuration.txt">
```

### Templating
You can override the complete template if you need to make changes to the markup. For this, you need to put the following inside your TypoScript configuration:
```
tt_content.gridelements_pi1.20.10.setup.tx_ceaccordion {
    cObject.file = path/to/your/AccordionTemplate.html
}
```
