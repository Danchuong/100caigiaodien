# Numbered — Refero Style

- Refero URL: https://styles.refero.design/style/50f0b6d5-9e96-42a1-9564-a6e99c289f98
- Site URL: https://numbered.studio
- ID: 50f0b6d5-9e96-42a1-9564-a6e99c289f98
- Theme: dark
- Industry: agency
- Created: 2026-04-30T02:47:51.832Z
- Ranks: newest: 290, popular: 1263, trending: 1261

> Shadowy Gallery Canvas

## Description

Numbered employs a deep, high-contrast visual system, where stark black canvases provide a dramatic backdrop for crisp white typography and subtle, refined interactions. The design uses spacious layouts and minimal ornamentation, allowing large-scale imagery and bold headlines to dominate. Interactive elements are understated, relying on elegant hover states rather than overt visual cues, contributing to a premium, editorial aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Black | #111111 | neutral | Page backgrounds, section backgrounds, hero areas — this deep black provides high contrast for all content |
| Ghost White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Muted Ash | #4f4f4f | neutral | Subtle borders, secondary navigation elements |
| Desert Sand | #bc9873 | accent | Subtle surface accents, potentially for card backgrounds or specific content areas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| aktiv-web | Inter | 400, 700 | 12px, 13px, 15px, 25px, 54px, 74px | 1.00, 1.20, 1.50, 2.00 | Primary font for all text from headings to body, and navigation. Its clean, sans-serif structure alongside the high contrast background ensures clarity while maintaining a contemporary feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 13 | 1.5 |  |
| body | 15 | 1.5 |  |
| body-lg | 25 | 1.3 |  |
| heading-sm | 54 | 1.3 |  |
| heading | 74 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "99px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Border Button

**Role:** Call to action or navigation links.

Text in Ghost White (#ffffff), bordered by 1px solid Ghost White (#ffffff). Features minimal padding of 1px vertical and 6px horizontal, with a 0px border-radius, giving it a sharp, understated outline against the dark background.

### Content Card

**Role:** Displaying featured work or case studies.

Transparent background (rgba(0,0,0,0)) with no border, shadow, or border-radius. Content within the card is responsible for its own styling, maintaining the minimalist dark aesthetic. Padding is 0px.

### Navigation Link

**Role:** Top-level navigation items or footer links.

Ghost White (#ffffff) text using aktiv-web font, weight 400. Features small bottom padding of 3px, creating a subtle visual space under the text, often appearing as an underline on hover without being explicitly declared.

## Do's

- Prioritize Canvas Black (#111111) as the default background for all sections to maintain a high-contrast dark theme.
- Use Ghost White (#ffffff) for all primary text, headlines, and interactive element outlines.
- Apply aktiv-web (or Inter) font at various sizes, ensuring body text remains legible on the dark background.
- Maintain a spacious layout with a section gap of 99px to emphasize content separation and visual breathing room.
- Utilize 0px border-radius for all elements, including buttons and cards, to enforce the sharp, modern aesthetic.
- Employ minimal borders of 1px solid Ghost White (#ffffff) for interactive elements, focusing on subtle visual cues.
- Leverage large-scale, striking imagery as primary visual content within sections, allowing them to bleed to the edges.

## Don'ts

- Do not introduce overt border-radius on any components; adhere to the sharp, angular aesthetic with 0px radius.
- Avoid using drop shadows or heavy box-shadows, as the design relies on flat surfaces and high contrast.
- Refrain from adding vibrant or numerous accent colors; the system is built on a restrained, monochromatic palette with minimal accentuation.
- Do not use generic system fonts when aktiv-web (or Inter) is available, as the specific font style contributes significantly to brand identity.
- Avoid tight spacing; maintain the generous sectionGap of 99px and general spaciousness.
- Do not add filled button variants; interactive elements should primarily be ghosted outlines or text links.
- Do not introduce unnecessary dividers or heavy visual separators between content blocks; rely on background color changes and generous spacing.

## Layout

The page primarily uses a full-bleed layout, particularly for hero sections and large image blocks, filling the entire viewport horizontally. Content within sections, when not full-bleed imagery, is typically constrained by a maximum width and centered, allowing for visual breathing room on the sides. The hero pattern often involves large, striking photography with white, often serif, text overlaid, creating an editorial masthead feel. Sections generally flow vertically with consistent, generous spacing (99px section gap), providing a clean rhythm. Content arrangement frequently alternates between large visual blocks and stacked text sections, sometimes with implied two-column structures for text-heavy areas. There is no explicit grid for cards but content blocks are large and distinct. Navigation is a minimal top-right 'Contact' button, with a full-page menu invoked for comprehensive navigation.

## Imagery

The site features high-quality, large-format photography and product shots, often full-bleed or occupying significant visual space. Imagery is treated realistically, focusing on natural light and candid moments for lifestyle shots, or clean, well-lit product focus for case studies. There are no overt graphic treatments like duotones or heavy filters; images maintain their natural color and detail. The role of imagery is primarily decorative atmosphere and showcasing client work, rather than explanatory diagrams or abstract graphics. Density is image-heavy, with full-screen visuals interspersed with text.

## Similar Brands

| Business | Why |
| --- | --- |
| Basic. Space | Similar high-contrast dark theme, large-scale imagery, and minimalist typography. |
| Locomotive Agency | Uses a dark background, bold type, and a focus on visual impact through photography with minimal UI chrome. |
| Work & Co | Employs a premium, editorial feel with generous spacing, high-contrast text, and a focus on case studies presented with large visuals. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #111111
border: #ffffff
accent: #bc9873
primary action: no distinct CTA color

Example Component Prompts:
Create a hero section: Canvas Black background. Headline "Numbered" in large aktiv-web (74px, 1.0 lineHeight) Ghost White text. Subtext 'Design, Content Production & Technology' inaktiv-web (15px, 1.2 lineHeight) Ghost White text at the bottom-center. No padding.
Create a section with a large headline: Canvas Black background. Headline 'CASES STUDIES' in aktiv-web (54px, 1.2 lineHeight) Ghost White text, left-aligned. Follow with a 'View all' link in Ghost White (#ffffff) text, aktiv-web (13px, 1.2 lineHeight).
Create a ghost button: Text 'CONTACT' in Ghost White (#ffffff), aktiv-web font (13px, 1.2 lineHeight), with a 1px solid Ghost White (#ffffff) border, 0px border-radius, 1px vertical and 6px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517254050-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517254050-thumb.jpg |
