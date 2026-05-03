# Gawker — Refero Style

- Refero URL: https://styles.refero.design/style/c5df49ca-18b5-467d-ada5-613723a1ade6
- Site URL: https://www.gawker.com
- ID: c5df49ca-18b5-467d-ada5-613723a1ade6
- Theme: light
- Industry: media
- Created: 2026-04-30T03:26:29.800Z
- Ranks: newest: 152, popular: 1084, trending: 1066

> monochromatic newsprint, stark and direct

## Description

Gawker presents a stark, high-contrast visual system built on black text on a white canvas, reminiscent of traditional newsprint. The design prioritizes readability and directness with minimal embellishment—borders are thin and rectangular, and color is used sparingly, primarily as an electrifying blue accent for interactive elements. Typography is robust and sans-serif, anchoring the content without distraction while a bold, custom headline font injects personality. The overall tone is functional and no-nonsense, with clear visual separation for content blocks.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, surface fills for text blocks and cards |
| Midnight Ink | #000000 | neutral | Primary text, headings, button text, and icon fills |
| Faded Silver | #e5e7eb | neutral | Subtle dividers, card borders, and ghost button outlines |
| Electric Blue | #2563eb | brand | Primary action backgrounds, interactive borders, and accent highlights |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 700 | 16px, 18px | 1.50, 1.56 | Body text, navigation links, and button labels. Its versatility maintains consistency across various text-heavy elements. |
| Arial | Helvetica Neue, Helvetica, sans-serif | 300, 700 | 10px, 12px, 32px | 1.33, 1.38, 1.60 | Captions, legal text, and secondary headings. The smaller sizes provide fine print readability. |
| etna-x-condensed |  | 400 | 40px | 0.85 | Distinctive headlines for articles and key product statements, utilizing a custom condensed style for impact. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.33 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.56 |  |
| heading | 32 | 1.6 |  |
| display | 40 | 0.85 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "6px"
  },
  "elementGap": "16px",
  "sectionGap": "86px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Login Button (Filled)

**Role:** Primary call to action in the navigation.

A filled button with Electric Blue background, Canvas White text (Inter, 400), and 0px border-radius. Padding of 8px vertical and 16px horizontal.

### Ghost Action Button

**Role:** Secondary action button within content areas.

Transparent background, Midnight Ink text (Inter, 400), and a thin, 0px radiused border using Faded Silver. Top-border only makes it feel like it's part of a table or list.

### Outlined Action Button

**Role:** Prominent, interactive action that uses brand color for emphasis.

Transparent background, Midnight Ink text (Inter, 400), and a thin, 0px radiused border in Electric Blue. Top-border only emphasizes a relationship to preceding content or a group of controls.

### Article Card

**Role:** Container for article previews or featured content.

Canvas White background with a 2px solid Faded Silver border and 0px border-radius. Contains a prominent headline and a body snippet, with ghost-like action buttons below separated by a top border.

### Legal Footer Link

**Role:** Informational links in the footer.

Midnight Ink text (Arial, 300, 10px), with 4px horizontal padding.

## Do's

- Use Midnight Ink (#000000) for all primary text and headlines to maintain high contrast and readability.
- Apply Canvas White (#ffffff) as the primary background for all page sections and content cards.
- Utilize Electric Blue (#2563eb) exclusively for primary interactive elements, such as filled buttons or distinct action borders.
- Employ Faded Silver (#e5e7eb) for subtle separation, such as card borders or thin dividers, keeping the visual hierarchy clear without heavy lines.
- Maintain a consistent 0px border-radius for all interactive components and content blocks to preserve the sharp, direct aesthetic.
- Use 'etna-x-condensed' for impactful display headlines (40px, weight 400) and 'Inter' for all body text and general UI (16px, weight 400).
- Employ `sectionGap` of `86px` for vertical separation between major content blocks.

## Don'ts

- Do not introduce additional saturated colors beyond Electric Blue (#2563eb) for interactive states or accents; maintain a primarily achromatic palette.
- Avoid decorative shadows or complex gradients; the system relies on flat surfaces and clean lines.
- Do not use rounded corners beyond the specified 6px radius for general elements inside the card, if any, or any component for which the radius is specified to be 0px.
- Refrain from using more than two font families; 'Inter', 'Arial', and 'etna-x-condensed' are sufficient for all typographic needs.
- Do not vary line-height inconsistently; adhere to the specified values for each text size to ensure consistent vertical rhythm.
- Avoid placing text directly on top of images or complex backgrounds; content should always reside on clear white or solid surfaces.
- Do not implement extensive iconography; use minimal, functional icons that are single-color if needed.

## Layout

The page adheres to a centered, max-width contained layout for core content. The hero area is currently text-based with a large headline. Sections are defined by generous vertical spacing (86px `sectionGap`) and often feature a card-like structure with distinct borders. Content is primarily stacked vertically, with some grid-like arrangements for interactive elements such (seen in the two-column buttons inside the article card). The navigation is a top-bar with a simple 'Login' button. The overall density is comfortable, with ample whitespace.

## Imagery

This site predominantly features UI elements and typography over imagery. When images or graphics are present, they are either product-focused screenshots or abstract representations, fitting within the stark, direct interface. Icons are likely minimal and monochromatic, serving functional rather than decorative roles. The density is text-dominant.

## Similar Brands

| Business | Why |
| --- | --- |
| The New York Times | High-contrast text-on-white, strong typographic hierarchy for news content, and minimal use of accent colors. |
| Washington Post | Emphasis on clear readability with sans-serif fonts, strong headlines, and a functional, often monochromatic, color palette. |
| Medium | Focus on readability with a simple, high-contrast palette, contained layouts, and classic typefaces. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e7eb
accent: #2563eb
primary action: #2563eb (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #2563eb background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design an article headline: 'WWE LEGEND, GAWKER SLAYER...' using etna-x-condensed font 40px weight 400, line-height 0.85, color #000000.
3. Produce an 'Ask A Gawker™' ghost button: transparent background, text #000000, Inter font 16px weight 400, 0px border-radius, top border 2px solid #e5e7eb, 16px vertical padding.
4. Create a footer copyright text: '© 2025 GMI Pte Ltd -' using Arial font 10px weight 300, color #000000.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519574817-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519574817-thumb.jpg |
