# Hex — Refero Style

- Refero URL: https://styles.refero.design/style/3e32db74-a61d-4e72-93b8-1fb949af2c00
- Site URL: https://hex.tech
- ID: 3e32db74-a61d-4e72-93b8-1fb949af2c00
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:20:56.395Z
- Ranks: newest: 828, popular: 506, trending: 305

> Analytical Clarity on Canvas: A pristine digital workspace where data takes center stage, framed by muted sophistication and precise typography.

## Description

Hex delivers a sophisticated, data-centric aesthetic, characterized by a clean white canvas that highlights nuanced typography and subtle violet accents. The design balances precise information display with hints of visual depth through soft shadows and varied typefaces. Interactive elements are thoughtfully understated, relying on outlines and muted states rather than bold fills, ensuring the focus remains on the analytical content and user workflow.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fffcfc | neutral | Page background, card backgrounds, input fields, primary surfaces — the foundational light backdrop for all content |
| Obsidian Ink | #01011b | neutral | Primary text, informational UI elements, card outlines, dark surface accents — a deep, muted violet-black that anchors primary content |
| Eggplant Gray | #31263b | neutral | Secondary text, subtle borders, navigation text, and outlined button borders — a dark, desaturated gray with a hint of violet providing subtle contrast; Background for rich data visualization or complex interactive panels, providing a deep, immersive context |
| Charcoal Grey | #14141c | neutral | Headings, strong text, navigation text, prominent borders — a slightly warmer, very dark gray for emphasis |
| Cement Gray | #717a94 | neutral | Muted helper text, secondary icon fills, faint dividing lines — a cool, light grey for low-emphasis elements |
| Dusk Violet | #43394c | neutral | Subtle borders, navigation items, descriptive text — a mid-tone desaturated violet for a sense of quiet authority |
| Platinum Mist | #ecedf2 | neutral | Subtle background panels, table headers, soft dividers — a very light, cool gray for secondary surface differentiation |
| Slate Cloud | #dbd7da | neutral | Light borders, grid lines, subtle component separators — a pale, slightly warm gray |
| Minsk Violet | #473982 | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Indigo Punch | #6f63b7 | accent | Violet wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Lavender Field | #9e91d6 | accent | Secondary data visualization, softened accents — a moderate violet for complementary data representation |
| Rose Quartz | #f5c0c0 | accent | Subtle indicators, decorative graphic elements — a muted red that provides a soft, warm counterpoint |
| Sunset Fade Gradient | #cd5973 | accent | Decorative graphical elements, expressive backgrounds where a dynamic color transition is desired |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PP Editorial New | Playfair Display | 200 | 78px | 1.30 | Display headlines — an extremely light-weight serif that creates a sense of gravitas and refined authority, setting a delicate, yet prominent tone for key brand statements. |
| PP Formula SemiExtended | Archivo Expanded | 700 | 60px | 1.30 | Prominent marketing headlines, impactful feature titles — a bold, semi-extended sans-serif that commands attention with its strong, wide presence. |
| PP Formula | Archivo Black | 800 | 28px | 1.30 | Section headings, key UI labels — a very bold, compact sans-serif that delivers high impact in a smaller footprint, excellent for concise titles. |
| IBM Plex Sans | Inter | 400, 500, 600, 700 | 10px, 12px, 16px, 20px, 24px, 26px | 1.20, 1.30, 1.40, 1.60, 1.83, 2.20, 2.33 | General body text, UI labels, subheadings, and data labels — providing legibility and versatility across various content densities and functional needs. Distinctly tight letter-spacing at larger sizes gives a modern, compact feel. |
| Lato | Open Sans | 400, 600, 700 | 10px, 12px, 14px | 1.20, 1.40, 1.83, 2.00, 2.20 | Small text, captions, metadata, and fine print — used for subtle informational text due to its slightly condensed feel and moderate letter-spacing. |
| Cinetype | Inter | 300, 400, 500, 700 | 12px, 14px, 16px, 20px, 24px | 1.00, 1.50, 1.57 | Navigation, buttons, and functional UI elements — a versatile geometric sans-serif for interactive components, ensuring clarity and crispness. Normal letter-spacing maintains readability at smaller UI sizes. |
| IBM Plex Mono | Roboto Mono | 400 | 11px | 1.50 | Code snippets, data fields, and technical information — providing a consistent, fixed-width appearance crucial for displaying code and structured data clearly. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.2 | -0.14 |
| heading | 24 | 1.3 |  |
| heading-lg | 28 | 1.3 | -0.7 |
| display | 78 | 1.3 | -1.872 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "badges": "9999px",
    "inputs": "6px",
    "buttons": "3px",
    "default": "3px"
  },
  "elementGap": "8px",
  "sectionGap": "70px",
  "cardPadding": "12px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Ghost Button

**Role:** Action button

Transparent background with a 1px Eggplant Gray (#31263b) border, 3px corner radius, and Obsidian Ink (#01011b) text. Padding is 9.6px vertical and 13.6px horizontal, using Cinetype font at 16px.

### Standard Card

**Role:** Information container

Canvas White (#fffcfc) background with a 6px border radius, featuring a layered shadow: rgba(49, 38, 59, 0.22) 0px 0px 0px 1px (thin border), rgba(49, 38, 59, 0.09) 0px 103px 103px 0px (large, distant shadow), rgba(49, 38, 59, 0.1) 0px 26px 57px 0px (closer, softer shadow). No internal padding indicated by default.

### Modal Card

**Role:** Interactive container

Frosted Canvas White (rgba(253, 253, 253, 0.4)) background with a larger 12px border radius. This card uses a complex, soft, multi-layered shadow with an inset #000000 shadow for depth, suggesting a floating, ethereal quality. Internal padding of 38px vertical and 45px horizontal defines its content area.

### Text Input

**Role:** Data entry

Transparent background, Obsidian Ink (#01011b) text and 1px border, with a 6px border radius. Internal padding is 12px on all sides, ensuring ample space for input. Focus states are indicated by an inset white shadow.

### Nav Button

**Role:** Navigation link

Transparent background, Eggplant Gray (#31263b) text, with Cinetype font at 16px. Implicitly, interaction involves a border change or background fill, as seen on the 'Get Started' button when hovered/active.

## Do's

- Prioritize Canvas White (#fffcfc) for all primary backgrounds to maintain a clean, expansive aesthetic.
- Use Obsidian Ink (#01011b) for primary body text and most UI elements, reserving Charcoal Grey (#14141c) for headings.
- Apply Eggplant Gray (#31263b) as the default border color for outlined elements and secondary text.
- Utilize Minsk Violet (#473982) sparingly for accents, interactive states, and to highlight key application functionality.
- Ensure all cards use a 6px border radius and the layered shadow style: rgba(49, 38, 59, 0.22) 0px 0px 0px 1px, rgba(49, 38, 59, 0.09) 0px 103px 103px 0px, rgba(49, 38, 59, 0.1) 0px 26px 57px 0px.
- Implement the display typography in PP Editorial New at 78px, weight 200, with -0.0240em letter-spacing for all hero headlines.
- Maintain a compact spacing density, predominantly using 8px for element gaps and 3px for general corner radii (buttons, links).

## Don'ts

- Avoid using bold, filled buttons unless explicitly specified for a primary action, favoring ghost buttons with Eggplant Gray (#31263b) borders.
- Do not introduce strong, saturated colors unless they are part of the defined brand or accent palette, maintaining the subdued aesthetic.
- Refrain from using heavily textured or patterned backgrounds; surfaces should remain clean and uniform.
- Do not deviate from the specified typefaces; the interplay of serif for display and sans-serif for UI is crucial to the brand's typographic identity.
- Avoid excessive use of heavy shadows or opaque overlays, as the system relies on subtle depth and clear separation.
- Do not use letter-spacing values greater than normal for any text, especially body or caption text, as the design uses tight tracking to aid clarity.
- Avoid 9999px radius for anything other than small tags or badges; standard components use radii of 3px, 6px, or 12px.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(49, 38, 59, 0.22) 0px 0px 0px 1px, rgba(49, 38, 59, 0.09) 0px 103px 103px 0px, rgba(49, 38, 59, 0.1) 0px 26px 57px 0px |
| Hovered Card | rgba(49, 38, 59, 0.22) 0px 0px 0px 1px, rgba(49, 38, 59, 0.1) 0px 26px 57px 0px |
| Modal/Overlay Card | rgba(0, 0, 0, 0.05) 0px 0px 11px 0px inset, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px, rgba(0, 0, 0, 0.05) 0px 16px 24px -8px, rgba(0, 0, 0, 0.05) 0px 8px 12px -4px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px |
| Input Focus | rgb(255, 255, 255) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Similar approach to clean, white interface with prominent product screenshots embedded into the UI and a focus on subtle interactive elements. |
| Linear | Emphasizes clear typography with a blend of serif and sans-serif for distinct roles, minimalist UI patterns, and strong brand presence through content rather than heavy styling. |
| Amplitude | Heavy use of data visualization within a light, analytical product interface, pairing a primary monospace font with a versatile sans-serif. |
| Notion | Clear, crisp typography on a spacious white canvas, allowing content to take precedence, with functional components integrating seamlessly into the flow. |
| Vercel | Precise, almost austere typography, with an emphasis on code and technical content within a clean, high-contrast light-mode interface. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #01011b
background: #fffcfc
border: #31263b
accent: #473982
primary action: #31263b (outlined action border)

Example Component Prompts:
1. Create a Hero Headline section: Canvas White (#fffcfc) background. Headline at 78px PP Editorial New weight 200, Obsidian Ink (#01011b), letter-spacing -1.872px. Subtext at 20px IBM Plex Sans weight 400, Eggplant Gray (#31263b), letter-spacing -0.5px. Add a ghost button: transparent background, 1px Eggplant Gray (#31263b) border, 3px radius, Cinetype font at 16px, Obsidian Ink (#01011b) text, 9.6px vertical padding, 13.6px horizontal padding.
2. Design a Feature Card: Canvas White (#fffcfc) background, 6px radius, with shadow 'rgba(49, 38, 59, 0.22) 0px 0px 0px 1px, rgba(49, 38, 59, 0.09) 0px 103px 103px 0px, rgba(49, 38, 59, 0.1) 0px 26px 57px 0px'. Title in Charcoal Grey (#14141c) at 24px IBM Plex Sans weight 600, body text in Obsidian Ink (#01011b) at 16px IBM Plex Sans weight 400.
3. Create a User Input Field: Canvas White (#fffcfc) background, 1px Obsidian Ink (#01011b) border, 6px radius. Placeholder text in Cement Gray (#717a94) at 16px IBM Plex Sans weight 400. Input text in Obsidian Ink (#01011b) at 16px IBM Plex Sans weight 400. 12px padding on all sides.
4. Build a Navigation Link: Text 'Products' in Eggplant Gray (#31263b) at 16px Cinetype weight 500. No background, no border. On hover, text color changes to Minsk Violet (#473982).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508417931-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508417931-thumb.jpg |
