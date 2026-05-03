# Icam inox s.r.l. — Refero Style

- Refero URL: https://styles.refero.design/style/e51d5c11-0190-40c8-9f73-92ba82488692
- Site URL: https://www.icam-inox.com
- ID: e51d5c11-0190-40c8-9f73-92ba82488692
- Theme: light
- Industry: other
- Created: 2026-04-30T01:27:00.295Z
- Ranks: newest: 599, popular: 1279, trending: 1245

> Monochrome industrial precision

## Description

The Icam visual system is a study in stark monochrome contrast and material precision. It pairs crisp, confident typography with expansive white and deep black surfaces, creating a sense of technical authority. Subtle, large radius rounded corners soften rigid forms, while minimal borders and generous spacing maintain an airy, professional feel. The design emphasizes content through direct visual hierarchy rather than ornamental complexity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Black | #000000 | neutral | Primary text, headers at smaller sizes, icons, structural borders, initial hero background filler |
| Heavy Graphite | #090909 | neutral | Footer background, secondary dark surface, used for large dark background areas |
| Deep Shadow | #0f0f0f | neutral | Decorative borders for cards and images, hinting at depth without full elevation |
| Charcoal Text | #333333 | neutral | Secondary text for paragraphs, links, and detailed information |
| Medium Gray | #535353 | neutral | Muted helper text, tertiary body copy, and subtle heading details |
| Silver Link | #aaaaaa | neutral | Inactive link text, light decorative borders, and copyright information |
| Near White | #f3f3f3 | neutral | Primary page background, card surfaces, and subtle button borders |
| Pure White | #ffffff | neutral | Container backgrounds, button fills, active text for dark backgrounds, and prominent borders |
| Decorative Gray Blue | #a0a9b9 | neutral | Muted icon strokes, separators, and secondary graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 14px, 16px, 18px, 19px, 24px, 26px, 32px, 259px | 0.76, 0.80, 0.83, 1.00, 1.14, 1.17, 1.25, 1.39, 1.50, 2.00 | The sole typeface, Inter, handles all text roles. Its variable weights are used to establish hierarchy against a monochrome backdrop, with very tight letter-spacing for display headings creating a compressed, impactful look. Regular spacing aids readability for body text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.17 |  |
| body-sm | 16 | 1.17 |  |
| body | 18 | 1.17 |  |
| body-lg | 19 | 1.17 |  |
| heading-sm | 24 | 1.17 |  |
| heading | 26 | 1.17 |  |
| heading-lg | 32 | 1.17 |  |
| display-sm | 259 | 1.17 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "buttons": "20px"
  },
  "elementGap": "10px",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button for prominent actions.

Filled with Pure White (#ffffff), text in Absolute Black (#000000). Features generous padding of 25px on all sides and a 20px border-radius, giving it a soft, pill-like appearance.

### Outlined Ghost Button

**Role:** Secondary action button, typically for navigation or less critical actions.

Transparent background, text in Pure White (#ffffff) and bordered with Pure White (#ffffff) for visibility against dark backgrounds. Padding is 18px on all sides, with no border-radius defined, maintaining sharp corners.

### Feature Card

**Role:** Used for showcasing distinct features or categories.

Background in Near White (#f3f3f3) with a 20px border-radius and no box shadow, presenting a flat, clean surface. Content inside the card has no inherent padding, implying images or text extend to edges or are managed by internal content spacing.

### Text Link

**Role:** Navigational links and inline text links.

Typically uses Charcoal Text (#333333) or Absolute Black (#000000), becoming Silver Link (#aaaaaa) when inactive or for minor metadata. Padding of 17px top/bottom and 5px left/right suggests clickable areas extending beyond text, often used in header/footer navigation.

## Do's

- Use Inter for all typography, leveraging its multiple weights to define hierarchy from display to body text.
- Apply Absolute Black (#000000) for primary headlines and Pure White (#ffffff) for light section backgrounds, establishing high contrast.
- Maintain a comfortable density with 10px element gaps for most inline elements and 64px or 71px vertical section spacing.
- Form all buttons and cards with a 20px border-radius to consistently introduce a soft, rounded aesthetic.
- Utilize Near White (#f3f3f3) for card backgrounds and secondary light surfaces to distinguish them from the main Pure White (#ffffff) canvas.
- Employ tightly tracked letter-spacing for large display text, such as -0.0720em for 259px, to achieve a condensed, impactful visual.

## Don'ts

- Do not introduce additional color beyond the established monochrome palette, including new accent or brand colors.
- Avoid box shadows or gradients; rely on contrasting surfaces, typography, and borders for visual hierarchy.
- Do not use letter-spacing on body text; keep it at normal for optimal readability.
- Do not deviate from the 20px border-radius for buttons and cards; sharp or smaller radii will break the visual consistency.
- Do not add unnecessary decorative elements; the design emphasizes functional clarity through direct presentation.
- Avoid dense information blocks; maintain generous spacing between elements and sections to preserve an airy, open feel.

## Layout

The page primarily uses a full-bleed layout, particularly for the hero section which can be a stark black canvas with prominent white typography. Content sections below often alternate between full-width black and white backgrounds, creating strong vertical rhythm. Within these sections, content appears to be structured in a max-width, center-aligned manner for readability over extensive line lengths, though a specific `pageMaxWidth` is not enforced globally. Feature sections utilize a grid of cards, likely 3-column. The navigation sits in a fixed header with minimal elements, usually a logo, language switcher, and a hamburger menu icon.

## Imagery

The visual language predominantly features high-contrast, product-focused photography of stainless steel and industrial components. Images are typically tightly cropped, showcasing the material and form directly without extraneous context or lifestyle elements. They are contained within card-like structures or used as backgrounds. The sparse use of icons is limited to outlined, monochrome symbols, primarily for navigation or utility. The overall impression is one of material honesty and technical precision, using imagery to illustrate product rather than decorate.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Similar use of expansive negative space, high-contrast monochrome UI, and strong typography for a professional, understated feel. |
| Apple (product pages) | Focus on showcasing product through clean, direct photography against stark, often white or black, backgrounds with minimal UI interference. |
| Figma | Employs an extensive neutral palette with functional use of stark black and white contrasts along with generous spacing to create a clean, organized interface. |
| Linear | Utilizes a highly structured, minimalist dark/light UI with consistent application of type scale and spacing to convey efficiency and precision. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #0f0f0f
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Design an Outlined Ghost Button for a dark background: transparent background, text in Pure White (#ffffff), border 1px solid Pure White (#ffffff), 18px padding, 0px border-radius.
3. Build a Feature Card: background Near White (#f3f3f3), 0px padding, 20px border-radius, no shadow. Inside, place a heading using Inter weight 700 at 24px and body text using Inter weight 400 at 16px, both in Absolute Black (#000000).
4. Form a Hero Section: full-width background Absolute Black (#000000). Place a headline 'Artigiani dell'acciaio inox' with Inter weight 700 at 259px, color Pure White (#ffffff), letter-spacing -0.0720em, centered on the page.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512402692-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512402692-thumb.jpg |
