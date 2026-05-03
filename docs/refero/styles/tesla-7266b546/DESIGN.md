# Tesla — Refero Style

- Refero URL: https://styles.refero.design/style/7266b546-2fb0-465c-acd6-79001c39829a
- Site URL: https://tesla.com
- ID: 7266b546-2fb0-465c-acd6-79001c39829a
- Theme: light
- Industry: other
- Created: 2026-02-23T19:42:54.000Z
- Ranks: newest: 1140, popular: 193, trending: 299

> Automotive Showroom on Screen. High-fidelity product visuals dominate, framed by a minimal, functional interface that gets out of the way.

## Description

The design operates like a premium automotive showroom translated to the screen. Every section is a full-bleed, cinematic product photograph, with UI elements acting as minimal, functional plaques. The palette is starkly achromatic, save for a single, electric Tesla Blue (#3e6ae1) reserved exclusively for primary calls-to-action, functioning like an ignition button. Typography is neutral and technical, serving information without asserting its own personality. This systematic subordination of UI to imagery ensures the product—the car, the solar panel—is always the undisrupted hero.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Tesla Blue | #3e6ae1 | brand | Primary CTAs ('Order Now') — a single, focused point of saturated color in an otherwise grayscale environment, creating an unmissable action prompt. |
| Pure White | #ffffff | neutral | Primary page backgrounds, card surfaces, text on dark/blue buttons. |
| Off-White | #eeeeee | neutral | Secondary content cards, subtle dividers between white sections. |
| Parchment | #e5e3df | neutral | Rare alternative background color for specific sections. |
| Light Border | #cccccc | neutral | Inactive UI element borders, subtle dividers. |
| Subtle Gray | #8e8e8 | neutral | Placeholder text, tertiary UI details. |
| Steel | #5c5e62 | neutral | Secondary text, footer links, icon fills. |
| Charcoal | #393c41 | neutral | Primary body text, text on light buttons, header navigation. |
| Onyx | #171a20 | neutral | Primary heading text, dark button backgrounds. |
| Carbon | #000000 | neutral | SVG icon fills, text overlays on light images. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Universal Sans Display | Inter, Manrope | 400, 500 | 12px, 20px, 28px, 34px, 40px, 48px | 1.17-1.41 | Used for all major headings and product titles. Its clean, geometric form provides a technical and confident voice that feels engineered, not decorated. |
| Universal Sans Text | Inter, SF Pro Text | 400, 500 | 12px, 14px, 17px | 1.00-1.67 | The workhorse font for body copy, buttons, navigation, and all UI text. Chosen for its supreme legibility and neutrality, it delivers information efficiently without distracting from the product visuals. |
| Roboto | Roboto, system-ui | 400, 500 | 11px | 1.20 | Reserved for fine print, legal disclaimers, and other low-hierarchy text where utility is the sole concern. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.2 |  |
| body | 14 | 1.43 |  |
| heading-sm | 20 | 1.4 |  |
| heading | 28 | 1.29 |  |
| heading-lg | 40 | 1.2 |  |
| display | 48 | 1.17 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "inputs": "4px",
    "modals": "8px",
    "buttons": "4px"
  },
  "elementGap": "8-16px",
  "sectionGap": "",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Region Selector Modal



### Offer Cards — Current Offers & American Heroes



### Bottom Action Bar — Ask a Question & Schedule a Drive



### Primary CTA Button

**Role:** The main action button for ordering or engaging.

Solid Tesla Blue (#3e6ae1) background with Pure White (#ffffff) text. 4px border radius. Padding is 4px top/bottom, 24px left/right.

### Secondary Ghost Button

**Role:** Secondary action like 'Learn More' or 'Demo'.

Transparent background with a thin Onyx (#171a20) border. Text is also Onyx (#171a20). 4px border radius. Padding is 4px top/bottom, 16px left/right.

### Modal Button (White)

**Role:** Secondary option within a modal or pop-up.

Solid Off-White (#eeeeee) background with Charcoal (#393c41) text. 4px border radius. Padding is 4px top/bottom, 24px left/right.

### Header Navigation Link

**Role:** Main site navigation.

Unstyled text link with Charcoal (#393c41) color. No background or borders.

### Footer Navigation Link

**Role:** Tertiary links in the site footer.

Unstyled text link with Steel (#5c5e62) color. Appears smaller than header navigation.

### Product Hero Section

**Role:** Full-screen container showcasing a single product.

Full-bleed background image. Contains a centered, stacked group of a Display heading (Onyx #171a20 or White #ffffff depending on image), Subheading text, and a pair of Primary/Secondary CTA buttons.

## Do's

- Always lead with a full-bleed, high-quality product image for every major section.
- Center-align text and CTAs over background images.
- Use Tesla Blue (#3e6ae1) exclusively for primary, high-priority actions like 'Order Now'.
- Pair a filled primary CTA with a white or ghost secondary CTA.
- Maintain a strict achromatic palette (white, grays, black) for all UI outside of the primary CTA.
- Use the 4px base unit for all padding, margins, and radii (e.g., 4px, 8px, 16px, 24px).
- Keep UI chrome, like headers and footers, visually minimal and unobtrusive.

## Don'ts

- Don't use Tesla Blue (#3e6ae1) for text, headlines, or decorative elements.
- Don't introduce any other saturated colors into the UI palette.
- Don't use complex components; prefer simple, stacked text and button layouts.
- Don't use large shadows, gradients, or heavy visual effects on UI elements.
- Don't create layouts where text dominates over imagery.
- Don't use border radii larger than 8px.
- Don't use serif or expressive display fonts; maintain a neutral, technical typographic voice.

## Layout

The page structure is a vertical series of full-screen, edge-to-edge content blocks, creating a 'scrolling presentation' experience. The dominant pattern is a centered stack: a large headline, supporting subtext, and action buttons overlaid directly onto a full-bleed background image. There is no visible page container; the browser viewport is the frame. Navigation is confined to a thin, non-sticky header bar at the very top, preserving maximum screen real estate for product visuals. Section transitions are seamless, with no visible gaps or dividers.

## Imagery

The visual language is defined by cinematic, high-fidelity product photography. Every image is treated as a hero shot, typically full-bleed, occupying the entire viewport. The photography style is sharp, clean, and often aspirational, showing products in ideal contexts (a car on an open road, solar panels on a modern home). Color grading is natural and vibrant to make the product pop against the neutral UI. The density is image-dominant; text and UI exist only to support the visual narrative established by the photos.

## Similar Brands

| Business | Why |
| --- | --- |
| Apple | Identical product-as-hero philosophy with full-bleed imagery, minimal UI, and a clean, technical sans-serif typography. |
| Rivian | Direct competitor using a similar full-screen, scroll-based storytelling layout with centered text over aspirational vehicle photography. |
| Sonos | Shares the use of pristine product shots on clean, achromatic backgrounds with minimal, functional UI components. |
| DJI | Employs a similar high-tech, premium aesthetic with cinematic product visuals and a dark/light minimalist interface. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text (Heading):** `#171a20` (Onyx)
- **Text (Body):** `#393c41` (Charcoal)
- **Background:** `#ffffff` (Pure White)
- **CTA (Primary):** `#3e6ae1` (Tesla Blue)
- **CTA (Secondary):** Transparent with `#171a20` (Onyx) border
- **Card Background:** `#eeeeee` (Off-White)

### Example Component Prompts
1.  **Product Hero Section:** "Create a full-screen hero section with a high-resolution image of a car on a desert road. Overlay a centered headline 'Model Y' using Universal Sans Display at 40px, weight 500, color #171a20. Below it, add a subheading 'Lease From $459/mo' in Universal Sans Text at 17px, weight 400, color #393c41. Add two buttons below with 16px gap: a primary button with text 'Order Now', background #3e6ae1, text color #ffffff, 4px radius, 4px 24px padding; and a secondary ghost button with text 'Learn More', transparent background, #171a20 border, #171a20 text color, 4px radius, 4px 24px padding."
2.  **Informational Card:** "Design an informational card with a background color of #eeeeee and an 8px border-radius. Padding should be 24px. Inside, place a left-aligned heading 'Current Offers' in Universal Sans Display at 28px, weight 500, color #171a20. Below it, add body text using Universal Sans Text at 14px, color #393c41. To the right of the text, place a squarish product image. Below the text, add a single secondary ghost button with text 'Learn More'."
3.  **Primary Button:** "Generate a primary call-to-action button. Set background to #3e6ae1, text color to #ffffff. Font should be Universal Sans Text, 14px, weight 500. Add a 4px border-radius. Set padding to 4px top/bottom and 24px left/right."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929531558-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929531558-thumb.jpg |
