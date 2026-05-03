# Beautiful™ — Refero Style

- Refero URL: https://styles.refero.design/style/8e1c35bf-f0e8-4889-b869-d9883bb76767
- Site URL: https://cookwithbeautiful.com
- ID: 8e1c35bf-f0e8-4889-b869-d9883bb76767
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:08:46.503Z
- Ranks: newest: 219, popular: 771, trending: 610

> Warm Home Goods Catalog: pages feel like browsing a tactile, sunlit lifestyle brand.

## Description

Beautiful™ uses a warm, inviting aesthetic with a creamy, almost edible color palette that feels like a home goods catalog. Typography blends classic serif with modern sans-serif for a confident yet approachable tone. Components emphasize soft, rounded edges and minimal elevation, fostering a tactile and gentle user experience. Color accents are reserved for primary calls to action, creating a subtle visual hierarchy without jarring contrasts.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Creamy Canvas | #fff5e6 | neutral | Page backgrounds, subtle surface accents, text background in header. This color sets the inviting, soft base tone |
| Buttermilk | #e8e8e1 | neutral | Dominant canvas, input backgrounds, subtle dividers in the footer. Provides a slightly cooler, but still warm, baseline |
| Deep Licorice | #000000 | neutral | Primary text, strong borders, navigation elements. Provides maximum contrast for readability against the warm neutrals |
| Truffle | #282828 | neutral | Secondary text, input text color, navigation borders. Offers a softer contrast than Deep Licorice |
| White Linen | #ffffff | neutral | Card backgrounds, button text, selected heading borders. Creates a clean, crisp surface |
| Pebble Gray | #cccccc | neutral | Card borders, subtle dividers. Defines card outlines without being overly sharp |
| Ash Mist | #707070 | neutral | Tertiary text or decorative borders. A lighter neutral for less prominent elements |
| Coral Kiss | #fa7864 | brand | Primary action button backgrounds, body text emphasis, heading borders — this vivid coral provides the main interactive highlight |
| Desert Rose | #dc8264 | brand | Subtler button borders, ghost button text, decorative icons — a muted, earthy orange for secondary interactive elements or accents |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Basis Grotesque Pro | Inter | 400 | 10px, 13px, 14px, 16px, 18px, 21px | 1.20, 1.30 | Primary sans-serif for body text, navigation, buttons, and general UI elements. Its confident but not aggressive character supports the overall approachable tone. Weights are consistently light, reinforcing the gentle visual system. |
| BasisGrotesquePro-Mono | Space Mono | 400 | 14px, 16px, 18px, 19px | 1.30, 1.42 | Monospaced font used sparingly for specific input fields, code-like accents, or potentially some labels, providing a technical contrast to the primary sans-serif. |
| GascogneTS | Playfair Display | 400, 500 | 25px, 28px, 30px, 32px, 39px, 43px, 52px | 1.00, 1.20 | Distinctive serif font for headlines and prominent brand elements. Its elegant, slightly playful character defines the brand's sophisticated but warm voice. The normal letter spacing at larger sizes allows its unique form to shine. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.3 | -0.03 |
| body | 16 | 1.2 | -0.034 |
| subheading | 21 | 1.2 | -0.038 |
| heading-sm | 25 | 1 | 0 |
| heading | 32 | 1.2 | 0 |
| heading-lg | 39 | 1 | 0 |
| display | 52 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "50%",
    "buttons": "999px",
    "navigation": "20px"
  },
  "elementGap": "10px",
  "sectionGap": "32px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with 'Coral Kiss' (#fa7864) background, 'White Linen' (#ffffff) text. Features a highly rounded 999px border-radius, with 9.6px vertical and 19.2px horizontal padding using Basis Grotesque Pro 400.

### Secondary Rounded Button

**Role:** Alternate call to action

Filled button with 'Coral Kiss' (#fa7864) background and 'White Linen' (#ffffff) text. Features a 50px border-radius, with 10px vertical and 30px horizontal padding using Basis Grotesque Pro 400. Slightly less rounded than Primary Action.

### Ghost Action Button

**Role:** Subtle, outlined action

Outlined button with 'Desert Rose' (#dc8264) border (1px), 'Creamy Canvas' (#fff5e6) background, and 'Desert Rose' (#dc8264) text. Has a 50% border-radius, with minimal 1px vertical and 6px horizontal padding, used for small, decorative actions like category tags.

### Navigation Link Button

**Role:** Navigational element

Outlined button style for top navigation items. Features a 'Desert Rose' (#dc8264) border, 'Creamy Canvas' (#fff5e6) background, and 'Desert Rose' (#dc8264) text. Has a 20px border-radius, likely with 10px vertical and 19px horizontal padding. Uses Basis Grotesque Pro 400.

### Circular Category Card

**Role:** Product category navigation

Circular card for product categories with 'White Linen' (#ffffff) background, 'Pebble Gray' (#cccccc) 1px solid border, and 50% border-radius. Contains imagery and uses 10px padding inside.

### Light Text Input

**Role:** User input field

Input field with 'Buttermilk' (#e8e8e1) background, 'Truffle' (#282828) text, and a 'Truffle' (#282828) 1px solid border. Has 10px vertical padding and 10px left padding, with extra right padding for icons or clear buttons.

## Do's

- Use 'Creamy Canvas' (#fff5e6) as the primary background for sections with content, providing a soft base.
- Prioritize 'Coral Kiss' (#fa7864) for all primary calls to action, such as 'Shop Now' buttons, and for emphasizing key messaging.
- Apply a 999px border-radius to all filled action buttons to achieve a soft, pill-shaped aesthetic.
- Employ the GascogneTS font for all headlines and prominent brand text to establish the elegant and inviting tone, using 'Deep Licorice' (#000000) for contrast.
- Maintain a comfortable information density, utilizing 10px as a baseline for `elementGap` and `cardPadding` to allow content to breathe.
- Use 'Buttermilk' (#e8e8e1) for input fields and subtle background variations to layer content without harsh breaks.
- Ensure brand imagery features soft lighting, a slightly desaturated color palette, and is contained within clear bounds, often circular or soft-edged.

## Don'ts

- Avoid harsh shadows or strong gradients; the system relies on subtle surface changes and color for hierarchy.
- Do not introduce new saturated primary colors; 'Coral Kiss' and 'Desert Rose' are the only brand accents intended for interactive elements.
- Refrain from using excessively bold or uppercase typography for calls to action or body text; the Basis Grotesque Pro 400 weight should maintain a gentle presence.
- Do not crop product photography tightly or use hard-edged imagery; images should complement the soft, inviting brand feel, often with a hint of lifestyle context.
- Avoid cluttering the layout; allow ample white space around elements, particularly with a `sectionGap` of 32px or more.
- Do not use dark backgrounds for main content sections; the theme is predominantly light, establishing a bright and airy feel.
- Do not use sharp 0px border-radii for interactive elements; all buttons and active components should maintain a soft, rounded appearance.

## Layout

The page model is primarily a max-width contained layout, though it appears to have full-bleed sections for hero imagery depending on viewport. The hero pattern includes a large visual of products on one side and a prominent headline and description on the other, reflecting a split-panel approach. Section rhythm maintains consistent vertical spacing, often distinguished by alternating background colors (Buttermilk vs Creamy Canvas). Content arrangement frequently utilizes 2-column layouts for text alongside visuals, and a 3-column grid for product cards. Overall density is comfortable, with ample breathing room between sections and elements. Navigation is a sticky top bar with the brand logo centered and dropdowns for collections.

## Imagery

The visual language for imagery on Beautiful™ is soft, inviting, and product-focused with a lifestyle touch. Photography is high-key, with bright, diffused lighting and slightly desaturated, warm tones. Products are often shown in a natural home setting or as clean, studio shots with soft shadows. Illustrations are flat, organic, and utilize the brand's warm color palette sparingly. Icons are outlined, with a moderate stroke weight, appearing monochrome. Images are typically contained, often within perfect circles for category navigation or soft-edged rectangles, providing decorative atmosphere and product showcasing. The site is image-heavy, balancing prominent visuals with concise text.

## Similar Brands

| Business | Why |
| --- | --- |
| Our Place | Shares a warm, inviting color palette and a focus on aesthetically pleasing home goods with subtle branding. |
| Parachute Home | Utilizes a similar light, natural aesthetic with comfortable typography and a minimalist approach to product presentation. |
| Dyson | Features a clean, product-centric visual language with carefully orchestrated imagery, although with a more industrial aesthetic. |
| Great Jones | Known for colorful, pastel kitchenware and a friendly, accessible brand voice, similar to Beautiful's approachable yet refined style. |
| West Elm | Combines modern design with comfortable, home-focused visuals and a clean, spacious layout. However, Beautiful's palette is softer. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #e8e8e1
border: #cccccc
accent: #fa7864
primary action: #fa7864 (filled action)

Example Component Prompts:
Create a Primary Action Button: #fa7864 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a circular category card: 'White Linen' (#ffffff) background, 'Pebble Gray' (#cccccc) 1px solid border, 50% border-radius, Basis Grotesque Pro 400 13px text 'Deep Licorice' (#000000).
Create a navigation link button: 'Creamy Canvas' (#fff5e6) background, 'Desert Rose' (#dc8264) 1px solid border, 'Desert Rose' (#dc8264) text, 20px border-radius, Basis Grotesque Pro 400 14px text, 10px vertical and 19px horizontal padding.
Create a light text input field: 'Buttermilk' (#e8e8e1) background, 'Truffle' (#282828) 1px solid border, 'Truffle' (#282828) 14px BasisGrotesquePro-Mono 400 text, 10px vertical and 10px left padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518501791-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518501791-thumb.jpg |
