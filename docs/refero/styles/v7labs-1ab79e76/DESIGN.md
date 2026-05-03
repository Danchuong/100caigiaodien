# V7labs — Refero Style

- Refero URL: https://styles.refero.design/style/1ab79e76-a07f-48fd-8e93-0a0fee12abd7
- Site URL: https://www.v7labs.com
- ID: 1ab79e76-a07f-48fd-8e93-0a0fee12abd7
- Theme: mixed
- Industry: fintech
- Created: 2026-04-30T00:29:44.654Z
- Ranks: newest: 783, popular: 1176, trending: 1132

> Dark Slate Operational Hub

## Description

V7 presents a data-driven, operational aesthetic with a strong dark mode emphasis contrasted by a single vibrant orange accent. Heavy-set headlines command attention, while compact, meticulously tracked body text conveys information efficiency. Surfaces are cool and dark, often in shades of gray, creating a backdrop for the brand's bold orange highlights, which are reserved for functional elements. Component shapes lean towards pronounced circularity and soft, rounded containers.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, critical UI elements, background sections in dark layouts. The foundational dark color |
| White Canvas | #ffffff | neutral | Primary background for light sections, inverse text on dark backgrounds, active states |
| Ghost Gray | #f7f6f5 | neutral | Secondary page background, subtle dividers, input fields. Provides slight visual separation from White Canvas |
| Charcoal Surface | #292929 | neutral | Dark surface background for cards and panels, borders, secondary text in dark mode |
| Deep Gray | #1c1c1c | neutral | Elevated dark backgrounds, footer background – darker than Charcoal Surface |
| Card Gray | #484848 | neutral | Background for information cards, slightly lighter than text color in dark sections to create subtle contrast |
| Muted Ash | #989897 | neutral | Muted body text, placeholder text, secondary icons. Provides a softer alternative to Charcoal Surface for less prominent information |
| Link Ink | #00104e | brand | Interactive link color, outlined button borders. A deep, saturated blue-violet for interaction |
| Action Orange | #ff683d | brand | Orange outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Danger Red | #ec580a | accent | Orange outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Info Blue | #2663eb | accent | Violet outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Warning Yellow | #ce8c04 | accent | Yellow outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Success Green | #14a249 | accent | Green outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Martina Plantijn Light | serif | 300, 400 | 24px, 30px, 40px, 60px | 1.00, 1.07, 1.33, 1.40 | Display and marketing headlines. Weight 300 for large sizes creates a sophisticated, authoritative tone, while 400 for smaller headings offers robust readability without losing elegance. |
| STK Bureau | Roboto | 400, 430 | 9px, 10px, 12px, 14px, 16px, 18px, 21px, 24px | 1.00, 1.08, 1.11, 1.14, 1.17, 1.25, 1.40, 1.43, 1.56 | Primary user interface text, navigation, and input labels. Its precise tracking ensures compact, information-dense areas remain legible and sharp. |
| Inter Variable | Inter | 400, 500 | 12px | 1.33 | Small functional text, captions, and secondary information where legibility at small sizes is paramount. |
| Inter | Inter | 400 | 12px, 16px | 1.20 | System-level text, tooltips, and default body copy for straightforward content. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| heading | 18 | 1.17 | -0.36 |
| heading-lg | 21 | 1.14 | -0.525 |
| display | 60 | 1 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "40px",
    "cards": "8px",
    "forms": "160px",
    "buttons": "160px",
    "circular": "99px",
    "secondaryElements": "2px"
  },
  "elementGap": "4px",
  "sectionGap": "39px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button - Filled

**Role:** Primary action button with a rounded, pill-like shape.

Background: Charcoal Surface (#292929), Text: White Canvas (#ffffff), Border Radius: 160px, Padding: 12px vertical, 20px horizontal.

### Pill Button - Outlined

**Role:** Secondary action button with a distinct border accent.

Background: transparent, Text: Link Ink (#00104e) or primary brand text for navigation, Border Color: Link Ink (#00104e), Border Radius: 160px, Padding: 12px vertical, 20px horizontal.

### White Text Button

**Role:** Light-themed or ghost button.

Background: White Canvas (#ffffff), Text: Midnight Ink (#000000), Border Radius: 160px, Padding: 0px.

### Standard Content Card

**Role:** Container for information modules within a dark section.

Background: Card Gray (#484848), Border Radius: 14px, Padding: 10px.

### Compact Content Card

**Role:** Smaller variant of the content card for denser information display.

Background: Card Gray (#484848), Border Radius: 7px, Padding: 4px.

### Light Overlay Card

**Role:** Slightly transparent card for highlighting content over a dark background.

Background: rgba(255, 255, 255, 0.12), Border Radius: 8px, Padding: 8px horizontal, 14px vertical.

### Pill Input Field

**Role:** Form input field with a distinctive pill shape.

Background: Ghost Gray (#f7f6f5), Text/Placeholder: Charcoal Surface (#292929), Border Color: Charcoal Surface (#292929), Border Radius: 160px, Padding: 10px vertical, 16px horizontal.

## Do's

- Prioritize Martina Plantijn Light for all prominent headlines (H1-H3), using weight 300 for large sizes (above 40px) to achieve a sophisticated, non-shouting presence.
- Utilize STK Bureau for all UI text, navigation, and most body content, applying its tight letter-spacing to maintain a compact, high-information density aesthetic.
- Implement Action Orange (#ff683d) exclusively for primary calls-to-action and essential interactive highlights; avoid using it for decorative purposes.
- Apply Charcoal Surface (#292929) as the default background for cards and content blocks within dark sections, ensuring visual consistency across components.
- Ensure interactive elements like buttons and input fields feature prominent rounded borders (160px or 40px radius) to emphasize their clickable nature.
- Use Link Ink (#00104e) sparingly for outlined button borders and text links, establishing a secondary interactive color that complements the brand orange.
- Maintain a clear visual hierarchy by using Midnight Ink (#000000) for primary text against light backgrounds and White Canvas (#ffffff) for primary text against dark backgrounds.

## Don'ts

- Do not introduce new saturated accent colors outside of the established brand and semantic palette; color should be functional, not decorative.
- Avoid using Martina Plantijn Light for body text or small UI elements, as its elegance is lost at smaller point sizes and its character designed for impact.
- Do not deviate from the specified border radii; the distinct rounding (e.g., 160px for buttons, 8px for cards) is a core part of the visual identity.
- Refrain from using drop shadows excessively; the system favors flat surfaces and subtle elevation, mainly rgba(0, 0, 0, 0.25) 0px 1px 2px 0px for minor depth.
- Do not mix light and dark surface colors randomly; sections should either commit to a full dark background (Charcoal Surface, Deep Gray) or a light background (White Canvas, Ghost Gray).
- Avoid generic system fonts unless explicitly specified for supplementary content; the custom typography is crucial for brand recognition and voice.
- Do not use Action Orange (#ff683d) for non-interactive elements or generic display text; its purpose is to guide user action.

## Similar Brands

| Business | Why |
| --- | --- |
| Rippling | Similar bold, data-forward typography and strong calls to action against a clean or contrasting background. |
| Retool | Employs a functional, compact UI vocabulary with a strong emphasis on dark modes and clear information hierarchy through card-based layouts. |
| Vanta | Shares a sophisticated yet direct visual communication style, often using a single strong accent color to denote action or brand presence within a largely neutral palette. |
| Gusto | Uses large, declarative headlines with specific font choices and distinct, heavily rounded buttons for calls to action. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000 (light sections), #ffffff (dark sections)
background: #f7f6f5 (light base), #292929 (dark base)
border: #000000 (light UI elements), #00104e (interactive outlined buttons)
accent: #ff683d
primary action: #292929 (filled action)

Example Component Prompts:
1. Create a primary call-to-action button: background #292929, text #ffffff, border radius 160px, padding 12px vertical, 20px horizontal, using STK Bureau weight 430, size 16px.
2. Design a Dark Content Card: background #484848, border radius 14px, padding 10px, with content text #ffffff at STK Bureau weight 400, size 14px.
3. Implement a Hero Section Headline: Martina Plantijn Light weight 300, size 60px, color #ffffff, letter-spacing -1.2px, centered against a background of Action Orange (#ff683d).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508931911-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508931911-thumb.jpg |
