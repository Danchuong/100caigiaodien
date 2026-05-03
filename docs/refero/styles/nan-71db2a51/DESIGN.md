# NaN — Refero Style

- Refero URL: https://styles.refero.design/style/71db2a51-118e-42b1-879d-29872d52142f
- Site URL: https://www.nan.xyz
- ID: 71db2a51-118e-42b1-879d-29872d52142f
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:58:47.536Z
- Ranks: newest: 255, popular: 998, trending: 934

> Digital Acid-Green Canvas: A hyper-digital screen, like a glowing terminal displaying custom fonts on a luminous green background.

## Description

NaN employs an experimental and vibrant aesthetic, channeling a 'digital paper' feel through a primary mint green canvas. Typography is the central visual element, utilizing custom typefaces with expressive weights and massive display sizes. Interaction is marked by sharp contrasts between dark charcoal and the vivid mint, with subtle holographic gradients adding a touch of digital luminescence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Screen Mint | #b7ffb4 | brand | Page background, primary surface, accent for interactive elements, borders, and text in dark mode |
| Code Green | #00ff00 | brand | Decorative highlights, UI accents, occasionally as a vibrant surface background. Appears sparingly for high-impact visual cues |
| Chromatic Blue | #0000ff | brand | Rare accent for buttons or interactive states, providing a sharp, electric contrast |
| Midnight Graphite | #262626 | neutral | Primary text color, border color, and background for secondary surface elements, providing deep contrast against the vivid backgrounds |
| Absolute Black | #000000 | neutral | Input text, critical borders, and fills for certain icons, reserved for maximum contrast |
| Paper White | #ffffff | neutral | Input field backgrounds and occasional elevated surfaces |
| Mercury Gray | #999999 | neutral | Muted text, subtle borders, and placeholder content |
| Light Steel | #efefef | neutral | Subtle background for UI elements like buttons in a desaturated state |
| Input Gray | #767676 | neutral | Input element borders, indicating inactive or default states |
| Hologram Gradient | #ffb005 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NaN Holo Mono | Space Mono | 300, 400, 500, 700, 800, 900 | 12px, 13px, 14px, 16px, 20px, 24px, 26px, 32px, 45px | 1.00, 1.20, 1.50, 2.00, 2.25, 3.00 | Navigation, body text, general UI elements, and code snippets. Its monospaced nature contributes to the site's digital aesthetic. |
| NaN Holo | Poppins | 300, 400, 700 | 12px, 16px, 45px, 86px | 1.20, 1.50 | Muted headings, secondary content titles, and some larger display text. Provides a softer, proportional alternative to 'NaN Holo Mono'. |
| NaNSuperXSerifTextThinItalicPREVIEW | Playfair Display Italic | 400 | 216px | 1.00 | Highly decorative, massive display headlines for font showcases. Its thin italic form creates dramatic contrast. |
| NaNSuperXSansDisplayBlackPREVIEW | Anton | 400 | 216px | 0.85 | Bold, impactful display headlines for font showcases, designed for high visual impact at extremely large sizes. |
| NaNArchyONExtraBlack_PREVIEW | Bebas Neue | 400 | 228px | 0.90 | Largest display headlines for font showcases, characterized by its extra-black weight and unique 'ON' style. |
| NaNHoloGigawideUltra1 | Oswald | 400 | 336px | 0.80 | The most extreme display font for full-width typographic impact, featuring ultra-wide letterforms. |
| NaNRageZippNarrowThin |  | 400 | 86px | 1 | NaNRageZippNarrowThin — detected in extracted data but not described by AI |
| NaNRageSoftXCondensedRegular |  | 400 | 86px | 1 | NaNRageSoftXCondensedRegular — detected in extracted data but not described by AI |
| NaNRageBeauStandardSemibold |  | 400 | 86px | 1 | NaNRageBeauStandardSemibold — detected in extracted data but not described by AI |
| NaNRageSansNarrowMedium |  | 400 | 86px | 1 | NaNRageSansNarrowMedium — detected in extracted data but not described by AI |
| NaNSerfATextLightItalic |  | 400 | 86px | 1 | NaNSerfATextLightItalic — detected in extracted data but not described by AI |
| NaNSerfSansLightItalic |  | 400 | 86px | 1 | NaNSerfSansLightItalic — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.075 |
| body | 14 | 1.5 | 0.075 |
| heading | 24 | 1.2 |  |
| display-sm | 45 | 1.2 |  |
| display | 86 | 1 |  |
| display-lg | 216 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "18px",
    "images": "8px",
    "default": "2px",
    "massiveButton": "29.4px"
  },
  "elementGap": "5px",
  "sectionGap": "40px",
  "cardPadding": "29px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Navigational element with underline on hover

Text in NaN Holo Mono, 14px, weight 400, Midnight Graphite (#262626). Underlined by a 1px solid Screen Mint (#b7ffb4) border on hover, with 1px padding below.

### Primary Button (Filled)

**Role:** Call to action button for primary interactions

Screen Mint (#b7ffb4) background with Midnight Graphite (#262626) text, 2px border radius on the right side only (0px 2px 2px 0px). Padding: 1.5px top, 7.5px right, 1px bottom, 7.5px left. Font: NaN Holo Mono, 14px, weight 400.

### Primary Button (Filled, Left Rounded)

**Role:** Used for sequenced or grouped actions, rounded on the left

Midnight Graphite (#262626) background with Screen Mint (#b7ffb4) text, 2px border radius on the left side only (2px 0px 0px 2px). Padding: 1.5px top, 7.5px right, 1px bottom, 7.5px left. Font: NaN Holo Mono, 14px, weight 400.

### Ghost Button

**Role:** Secondary action or subtle navigation

Transparent background with Midnight Graphite (#262626) text and a 1px Midnight Graphite (#262626) border, 2px border radius. Padding: 1.2px top, 6px right, 0px bottom, 6px left. Font: NaN Holo Mono, 14px, weight 400.

### Hologram Action Button

**Role:** High-impact call to action, often for 'Discover More'

Background uses Hologram Gradient: linear-gradient(270deg, rgb(255, 163, 182), rgb(221, 169, 255) 33%, rgb(162, 209, 255) 66%, rgb(255, 163, 182)). Black text. Rounded corners with a radius of 29.4px. Font: NaN Holo Nano, 14px, weight 400.

### Font Showcase Card

**Role:** Displays individual font variants or examples

Midnight Graphite (#262626) background with Screen Mint (#b7ffb4) text, 2px border radius. Content padding is typically 29px. Contains large display typography elements like NaN Rage Zipp Narrow Thin at 86px.

### Text Input (Default)

**Role:** Standard form input field

Paper White (#ffffff) background, Absolute Black (#000000) text, and a 1px Input Gray (#767676) border. No border-radius. Padding: 29.4px top, 17px right, 29.4px bottom, 34px left. Font: NaN Holo Mono, 14px, weight 400.

### Toggle Switch

**Role:** Provides an on/off selection for options

Elements appear as small, square buttons. The 'On' state uses Midnight Graphite (#262626) background with Screen Mint (#b7ffb4) text, 2px radius. The 'Off' state uses Screen Mint (#b7ffb4) background with Midnight Graphite (#262626) text.

## Do's

- Prioritize Screen Mint (#b7ffb4) as the dominant background color for most page sections, creating a luminous base.
- Use Midnight Graphite (#262626) for primary text and important borders to ensure high contrast against Screen Mint (#b7ffb4).
- Employ NaN Holo Mono at 14px weight 400 with 0.075em letter spacing for all body text and UI labels.
- Apply a Hologram Gradient to key 'Discover More' or 'Subscribe' actions, using rounded edges (29.4px) for a distinct interactive feel.
- Structure information using prominent, large-scale custom display typefaces like NaN ArchyONExtraBlack_PREVIEW for visual impact in showcasing fonts.
- Maintain minimal border radii (2px) on most interactive elements and cards, reserving larger radii (18px, 29.4px) for specific design accents.
- Use a default element gap of 5px for inline elements and tight groupings, building up to 40px for section separation.

## Don'ts

- Avoid using vibrant colors for large blocks of text; reserve them for accents, backgrounds, or specific UI elements.
- Do not introduce new typefaces; the system relies heavily on its custom NaN font family for brand identity.
- Refrain from using drop shadows or heavy elevation; the design system favors a flat, digital aesthetic with strong color contrasts.
- Do not use generic circular or heavily rounded buttons; specific, often asymmetrical, radii (e.g., 0px 2px 2px 0px) are characteristic of this design.
- Avoid breaking the high-contrast pairing of Screen Mint (#b7ffb4) and Midnight Graphite (#262626) for primary interactive elements.
- Do not use excessive visual flourishes or gradients beyond the defined Hologram Gradient; the system communicates through typography and bold color.
- Do not deviate from the compact density; generous negative space should be achieved through section gaps rather than element-level padding.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Eye on Design | Experimental typography, bold color choices and a focus on design as content. |
| Future Fonts | Showcasing evolving typefaces with interactive demos and dynamic layouts. |
| Pangram Pangram Foundry | Strong brand identity built around a distinctive color palette and powerful display typography. |
| Grilli Type | Emphasis on custom typefaces and a playful, unconventional UX. |
| Dinamo | Type foundry website with experimental layouts, vibrant accents, and interactive elements for font previews. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #262626
background: #b7ffb4
border: #262626
accent: #00ff00
primary action: #b7ffb4 (filled action)

Example Component Prompts:
1. Create a navigation link: 'Fonts' button in NaN Holo Mono, 14px, weight 400, #262626 text, transparent background, 1px #262626 border, 2px radius, 1.2px top / 6px right / 0px bottom / 6px left padding.
2. Create a 'Discover More' button: 'DISCOVER MORE' text in NaN Holo Mono, 14px, weight 400, #000000 text, background linear-gradient(270deg, #ffa3b6, #dda9ff 33%, #a2d1ff 66%, #ffa3b6), 29.4px border radius, 14px top / 7.5px right / 1px bottom / 7.5px left padding.
3. Create a font showcase card: 'NaN Rage Zipp' text in NaN Holo, 86px, weight 400, #b7ffb4 text, #262626 background, 2px border radius, 29px padding.
4. Create an input field: Background #ffffff, border 1px solid #767676, text #000000 in NaN Holo Mono, 14px, weight 400. Padding: 29.4px top, 17px right, 29.4px bottom, 34px left.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517901295-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517901295-thumb.jpg |
