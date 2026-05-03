# Woven — Refero Style

- Refero URL: https://styles.refero.design/style/76483bd1-37d3-4fb9-889b-aecf27b08b83
- Site URL: https://wovenwhisky.com
- ID: 76483bd1-37d3-4fb9-889b-aecf27b08b83
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:15:35.734Z
- Ranks: newest: 196, popular: 1154, trending: 1081

> Artisanal parchment and charcoal calligraphy

## Description

Woven's design system evokes a refined, artisanal mood with a predominantly monochrome palette punctuated by subtle, natural off-whites. Typography is compact and precise, often uppercase with generous tracking, conveying a sense of heritage and meticulous craftsmanship. Components are lightweight and border-focused, with minimal use of shadows, emphasizing content over heavy UI chrome. The overall effect is understated luxury, where visual tension is created through careful spacing and material contrast rather than bold color or complex graphics.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon | #232323 | neutral | Primary text, dark backgrounds for inverted sections, hairline borders, default button fills, and iconic elements. Its deep, near-black tone establishes gravitas |
| Parchment | #eeede5 | neutral | Dominant page background, providing a warm, tactile canvas that contributes to the artisanal feel |
| Porcelain | #ffffff | neutral | Card backgrounds, clean product display areas, and occasional link backgrounds, offering visual lift against the Parchment background |
| Slate | #4a4a4a | neutral | Secondary text, subtle borders, and placeholder text, offering a softer alternative to Carbon for less critical information |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Spezia Semi-Mono | IBM Plex Mono | 400, 700 | 12px, 14px, 15px, 16px, 18px, 20px | 1.20, 1.50, 1.63, 1.71, 2.40 | Primary UI text for links, navigation, body copy, and headings, often set in uppercase. Its semi-monospace nature and generous letter-spacing create a distinct, structured voice. |
| Spezia | Inter | 400 | 16px, 20px, 24px, 32px | 1.00, 1.13, 1.20, 1.23, 1.50, 1.63, 1.71, 2.40 | Used for prominent display headings and key brand messaging. Its proportional spacing provides a more traditional, impactful presence compared to the semi-mono variant. |
| Figtree | Figtree | 400, 700 | 12px, 14px | 1.63, 1.71 | Secondary text for buttons, navigation, and detailed list items. Its readability at small sizes complements the broader typographic choices, providing supporting information. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.63 | 0.063 |
| body-sm | 14 | 1.63 | 0.094 |
| heading-sm | 20 | 1.2 |  |
| heading | 24 | 1.23 |  |
| display | 32 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px",
    "circle": "50%"
  },
  "elementGap": "20px",
  "sectionGap": "150px",
  "cardPadding": "26px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element (e.g. navigation, menu toggles)

Transparent background, Carbon text color. Used for subtle interactions like menu buttons and secondary actions. No padding beyond content.

### Primary Filled Button

**Role:** Call to action

Carbon background, Porcelain text color. No border radius. Padding: 15px top, 40px right, 17px bottom, 40px left. Used for primary actions like 'Checkout'.

### Product Card

**Role:** Displaying product listings

Porcelain background, 0px border-radius, no box-shadow. Padding 26px on all sides. Used for displaying items like whisky bottles.

### Circular Card

**Role:** Decorative or iconic element container

Porcelain background, 50% border-radius (circle), no box-shadow. No padding. Used for purely aesthetic container needs.

### Underlined Input Field

**Role:** Text input areas

Transparent background, Carbon text color, bottom border of Carbon. No border-radius. Padding: 10px top/bottom, 0px left/right. Serves as a direct input for forms.

## Do's

- Use Parchment (#eeede5) as the default background for most page sections.
- Employ Carbon (#232323) for primary headings and body text, maintaining high contrast against light backgrounds.
- Apply all body text and secondary headings using 'Spezia Semi-Mono', emphasizing generous letter-spacing to enhance readability and establish a structured aesthetic.
- Utilize 0px border-radius for all primary interactive elements and most container edges to maintain a sharp, deliberate aesthetic.
- Ensure generous vertical spacing between sections, adhering to the `sectionGap` of 150px to create a spacious, breathable layout.
- Design interactive elements, especially navigation, as ghost buttons with transparent backgrounds and Carbon text, for an understated interface.
- Use 'Spezia' with normal letter spacing for large, impactful headlines to create visual differentiation from the monospaced UI text.

## Don'ts

- Avoid strong, saturated colors; limit the palette to the established neutrals to preserve the brand's understated elegance.
- Do not use box-shadows or heavy elevation for cards or main UI elements; surfaces should appear flat or with subtle border delineations.
- Do not use generic system fonts; always prioritize 'Spezia Semi-Mono', 'Spezia', and 'Figtree' to maintain consistent brand typography.
- Do not introduce rounded corners for primary UI elements; maintain sharp, crisp edges unless a circular card variation is explicitly required for decorative purposes.
- Avoid dense, information-heavy blocks of text; break content into manageable sections with ample negative space.
- Do not add unnecessary padding to ghost buttons; they should remain lightweight and borderless without internal spacing.

## Layout

The page primarily uses a full-bleed layout for background elements, with content contained centrally within an implicit maximum width, visible particularly in the product grids. The hero section often features a centered headline over a background that shifts between the dominant neutrals. Section rhythm is created through alternating Parchment and Porcelain backgrounds, but also through consistent vertical spacing (150px section gap) rather than explicit dividers. Content is arranged in alternating two-column layouts (text left, image right) or centered stacks for headlines and subtext. Product listings appear in responsive card grids. Navigation is a minimalistic top bar with a hamburger menu icon, suggesting a focus on content exploration rather than complex hierarchical navigation.

## Imagery

This design system uses product photography as its primary visual language. Imagery consists mainly of tightly cropped, minimalist product shots (whisky bottles) on pure white or light grey backgrounds. These are contained within defined boundaries without overlapping, often serving as the central focus of a section or within a grid. There are no lifestyle shots, abstract graphics, or 3D renders. Icons are minimal, outlined, and monochromatic (Carbon), serving purely functional roles like navigation or shopping cart indicators. Imagery dense, with products occupying significant visual space in relation to accompanying text, acting as explanatory content and product showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| Aēsop | Shares a monochromatic, minimalist aesthetic with an emphasis on typography and natural, muted tones. |
| Allbirds | Uses subtle earth tones, clean layouts, and functional, understated UI elements to convey quality and simplicity. |
| Great Jones | Employs classic typography, a restrained color palette, and elegant spacing to create a high-end feel for household goods. |
| Everlane | Features a strong focus on minimalist layouts, clear product photography, and a neutral color scheme for an ethical luxury feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #232323
background: #eeede5
border: #232323
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

Create a product listing card: Porcelain background (#ffffff), 0px radius, 26px padding. Product image at the top (assume centered). Product name 'HOMEMADE' centered below image, Spezia Semi-Mono, size 16px, weight 400, letter-spacing 0.167em, Carbon text (#232323). Price '£45' centered below name, Spezia Semi-Mono, size 15px, weight 400, letter-spacing 0.121em, Carbon text (#232323).

Create a navigation menu toggle: Ghost button. Carbon (#232323) icon (e.g. hamburger). No background, no padding. Element gap 8px from other nav items.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518914675-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518914675-thumb.jpg |
