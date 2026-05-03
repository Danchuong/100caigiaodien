# Symbol Audio — Refero Style

- Refero URL: https://styles.refero.design/style/3b742f76-25ad-446c-a942-09b09b93f6a3
- Site URL: https://www.symbolaudio.com
- ID: 3b742f76-25ad-446c-a942-09b09b93f6a3
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T01:30:04.547Z
- Ranks: newest: 587, popular: 1070, trending: 1063

> Sculptural Typography on Forest Canvas: Letterforms as architecture, anchored by a deep green backdrop.

## Description

Symbol Audio embodies a sophisticated industrial aesthetic, pairing a dominant forest green canvas with stark white typography and neutral product cards. Typography is a critical brand differentiator, utilizing custom display typefaces with extreme letter-spacing and substantial size to create an impactful, sculptural presence. Components are generally borderless and unadorned, relying on color contrast and the precision of typography to define elements. The overall feel is one of deliberate craftsmanship, reflecting the brand's focus on custom audio furniture.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Forest Canvas | #1c3c27 | brand | Page backgrounds, section fills, hero backgrounds, subtle interactive element borders — creates a deep, immersive environment where products stand out |
| Arctic Mist | #dfe2e5 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Ink | #000000 | neutral | Accent text, specific icon fills, high-contrast states on light surfaces, subtle borders — provides maximum contrast against lighter neutrals |
| Polar White | #fffffd | neutral | Product card backgrounds, modal surfaces — provides a clean, bright stage for product imagery and content |
| Mellow Yellow | #fffcda | neutral | A subtle, warm background tint used sparingly for secondary content blocks or to alleviate visual fatigue from pure white |
| Link Blue | #447cf0 | accent | Informational links, decorative accents, border highlights — a vivid, cool accent used for functional cues |
| Alert Red | #c72a00 | accent | Orange outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Chalet-LondonSixty | Georgia | 400 | 13px, 15px, 16px | 1.00, 1.30, 1.31, 1.33, 1.50 | Primary body text, labels, and sub-headings — characterized by its humanist, slightly condensed form for legibility at smaller sizes amid bold display type. Favored for its classic, refined feel. |
| SupremeLL-Bold | Roboto Condensed | 400 | 14px, 20px, 34px, 52px, 80px | 1.00, 1.13, 1.25, 1.26, 1.33 | Headlines, display text, and prominent navigational elements — its bold, tightly-tracked presence creates a high-impact, architectural statement. |
| Chalet-NewYorkSixty | Inter | 400 | 11px, 13px, 15px | 1.00, 1.33 | Captions, meta-information, and secondary navigational items — a more compact and understated version for supporting text. |
| SupremeLL-BoldFlat | Roboto Condensed | 400 | 15px | 1.33 | Specialized links, often used within paragraphs for emphasis or specific contexts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1 | 0 |
| body | 15 | 1.33 | 0 |
| subheading | 20 | 1.25 | -0.4 |
| heading | 34 | 1.26 | -0.68 |
| heading-lg | 52 | 1.13 | -1.04 |
| display | 80 | 1 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "0px",
    "default": "0px",
    "tagsAndBadges": "9999px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Bare Text Button

**Role:** Navigation and functional buttons

Text-only buttons using Arctic Mist (#dfe2e5) text on a transparent background, no padding or border by default. Focus is on direct textual interaction, minimalist by design.

### Outlined Text Button

**Role:** Secondary navigation and ghost actions

Text-based buttons with a Forest Canvas (#1c3c27) border and matching text, often seen with 20px left/right padding. These act as subtle calls to action or supplementary links.

### Product Card

**Role:** Display individual product listings

Product cards feature a Polar White (#fffffd) background with sharp 0px corners, no shadow. Product imagery is contained within, paired with Arctic Mist (#dfe2e5) text for titles and prices. A subtle border of Forest Canvas (#1c3c27) often frames the card.

### Minimal Input Field

**Role:** Search and data entry fields

Input fields have a transparent background with Arctic Mist (#dfe2e5) text and a matching bottom border. Minimalist design prioritizes direct text input. Includes 20px top/bottom padding.

### Product Tag

**Role:** Labels for product features or categories

Small informational tags or labels, often 'Bestseller' or 'New Arrival', with a 9999px border-radius, giving them a pill shape. Text is Ink (#000000) on a light background, paired with a subtle border for definition.

## Do's

- Prioritize SupremeLL-Bold for all major headings and display text, applying a tight letter-spacing of -0.0200em to maintain its distinctive, condensed feel.
- Use Forest Canvas (#1c3c27) as the primary background for most sections, creating a consistent, deep, and immersive brand experience.
- Employ Arctic Mist (#dfe2e5) for all primary body text, link text, and button text, ensuring legibility against the dark Forest Canvas.
- Keep all corners sharp with a 0px border-radius for product cards, input fields, and most structural components, reflecting a clean, unadorned aesthetic.
- Use Polar White (#fffffd) sparingly as a background for content cards where product presentation requires a bright, contrasting stage.
- Define interactive elements primarily through text color and subtle borders using Forest Canvas (#1c3c27) rather than filled backgrounds.
- Maintain a comfortable information density, using a base element gap of 20px to separate components and allow visual breathing room.

## Don'ts

- Avoid using drop shadows or complex elevation schemes; rely on color contrast and typographic hierarchy to establish visual organization.
- Do not introduce new saturated accent colors outside of Link Blue (#447cf0) and Alert Red (#c72a00) to preserve the muted and sophisticated palette.
- Refrain from using heavily styled, filled buttons; all primary interactions should be text-based or rely on subtle outlined appearances.
- Do not deviate from the established 0px border-radius for main content blocks or 9999px for tags; rounded corners are not part of the core brand identity.
- Avoid generic stock photography; all imagery should focus on high-quality product shots, lifestyle imagery should be minimal or absent.
- Do not center text within large content blocks unless it is a primary headline or hero element; prefer left-aligned text for readability.
- Avoid dense, information-heavy sections; ensure generous spacing around text and components to maintain a premium feel.

## Layout

The page primarily utilizes a full-bleed layout, where the Forest Canvas background extends edge-to-edge. Content within sections adheres to implied maximum widths, but the background color often fills the entire viewport width. The hero section is characterized by a full-bleed image or solid background with large, often sculptural, centered text overlay. Sections maintain a consistent vertical rhythm, often separated by the continuous Forest Canvas background. Content arrangement alternates between large centered headlines, and structured grids, such as 3-column product cards. The navigation is a classic top bar, appearing sticky at the top.

## Imagery

This site prominently features high-quality, professional product photography. Images are consistently full-bleed or tightly cropped product shots on pure white backgrounds, emphasizing the object without distracting context. There's an absence of lifestyle photography. Visuals are contained within sharp, 0px-radius boundaries. Icons, where present, are monochromatic and outlined, mirroring the minimalist interface style. Imagery primarily serves to showcase products, acting as direct content rather than decorative atmosphere. The density is image-heavy in product grids, with text playing a supporting role.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Prominent use of a deep, single brand accent color against a largely monochrome UI, with emphasis on clean typography and functional components. |
| Acme Co. | An industrial and slightly rugged aesthetic, favoring large, impactful typography, and minimal decoration on components. |
| Grovemade | Focus on high-quality product photography, natural materials and a strong, almost austere, presentation of goods, with limited color palette. |
| Braun (product pages) | Emphasis on functionality and uncluttered layouts, with precise typography and a restrained color scheme that lets products dominate visually. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #dfe2e5
background: #1c3c27
border: #1c3c27
accent: #447cf0
primary action: #1c3c27 (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #1c3c27 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Design a product listing card: Polar White (#fffffd) background, 0px border-radius, no shadow. Product title in Arctic Mist (#dfe2e5) using Chalet-LondonSixty at 15px. Price in Arctic Mist (#dfe2e5) at 13px.
3. Make a hero section: Forest Canvas (#1c3c27) full-bleed background. Centered headline 'Symbol' in Arctic Mist (#dfe2e5) using SupremeLL-Bold at 80px, letter-spacing -1.6px.
4. Create a 'New Arrival' product tag: pill-shaped (9999px border-radius), Ink (#000000) background, white text in Chalet-NewYorkSixty at 11px, weight 400, 4px padding.
5. Design a text input field: transparent background, Arctic Mist (#dfe2e5) text, 1px solid Arctic Mist (#dfe2e5) bottom border, 0px border-radius, Chalet-LondonSixty at 15px weight 400. Placeholder text is Arctic Mist (#dfe2e5) at 50% opacity.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512576291-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512576291-thumb.jpg |
