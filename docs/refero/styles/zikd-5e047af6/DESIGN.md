# Zikd — Refero Style

- Refero URL: https://styles.refero.design/style/5e047af6-228d-4de1-b008-6fe88c547a47
- Site URL: https://www.zikd.space/en
- ID: 5e047af6-228d-4de1-b008-6fe88c547a47
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:47:42.496Z
- Ranks: newest: 518, popular: 1238, trending: 1216

> High-contrast digital ledger.

## Description

Zikd employs a high-contrast theme defined by its stark black and white palette, punctuated by a soft, muted blue for interactive elements. Typography is bold and direct, ensuring clarity against dark backgrounds. Component surfaces feature sharp corners, with softer rounding reserved for interactive elements, contributing to a sense of precision and responsiveness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Content backgrounds, button text, secondary borders |
| Deep Graphite | #111111 | neutral | Component backgrounds, muted text, filled button backgrounds |
| Sky Dust | #b8e4fc | accent | Blue wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GD Sherpa | Inter | 400, 600, 700 | 13px, 16px, 23px, 35px | 1.20, 1.85 | Primary brand typeface for all content and UI elements; its varied weights establish clear hierarchy. |
| Arial | sans-serif | 400 | 16px | 1.20 | System fallback font, used for auxiliary information. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.85 |  |
| body-sm | 16 | 1.85 |  |
| body | 23 | 1.85 |  |
| body-lg | 35 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "14px",
    "lists": "5px",
    "buttons": "5px"
  },
  "elementGap": "16px",
  "sectionGap": "54px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button for main calls to action.

Background: Deep Graphite (#111111), Text: Canvas White (#ffffff), Border: Canvas White (#ffffff) 1px solid, Padding: 0px vertical, 24px horizontal, Radius: 6px.

### Search Result Card

**Role:** Container for related search topics.

Background: Sky Dust (#b8e4fc), Border: Midnight Ink (#000000) 3px solid, Padding: 20px vertical, 20px horizontal (with 8px bottom margin), Radius: 5px.

### Domain Lookup Card

**Role:** Container for the domain search input and action.

Background: rgba(0,0,0,0) (transparent), Border: Midnight Ink (#000000) 3px solid, Padding: 24px, Radius: 14px.

## Do's

- Prioritize Deep Graphite (#111111) as baseline for component backgrounds and Midnight Ink (#000000) for primary text and significant borders.
- Use Sky Dust (#b8e4fc) exclusively for interactive surface backgrounds like list items or search results, never for primary text or borders.
- Apply a 3px solid Midnight Ink (#000000) border to cards and interactive elements for a crisp, defined outline.
- Maintain a default padding of 24px for card content using `cardPadding`.
- Utilize GD Sherpa at 700 weight for primary actions and key interface elements to maximize impact.
- Ensure all buttons have a 5px border-radius unless specified, and cards use 14px for a distinct visual separation.
- Use 16px as the primary `elementGap` for horizontal and vertical spacing between related items.

## Don'ts

- Do not introduce additional saturated colors; maintain the strictly neutral palette with Sky Dust as the sole accent.
- Avoid using soft shadows or elevation effects; elements are defined by borders and background changes.
- Do not use Canvas White (#ffffff) for large background areas except for specific content zones or header.
- Do not deviate from the specified GD Sherpa font family for any textual content within the main interface.
- Do not combine multiple text sizes within a single sentence or functional element; adhere to the type scale for clear hierarchy.
- Avoid decorative imagery or complex graphics; the interface should rely on strong typography and clear UI elements.
- Do not use `elementGap` greater than 16px for elements within a component; reserve larger gaps for section separation.

## Layout

The page uses a contained layout model, with content centered within a maximum width that dictates the flow. The hero section is characterized by a prominent input field with a clear call-to-action button, vertically stacked and centered. Subsequent sections, such as 'Related Search Topics', utilize multiple vertically stacked cards with consistent padding. Sections are primarily separated by consistent vertical spacing, and strong 3px borders provide clear visual boundaries around components. The page maintains a comfortable density with ample breathing room between elements, rather than dense information blocks. A minimal sticky header with the brand logo is present at the top.

## Imagery

This site features a minimalist approach to imagery, primarily relying on small, simple icons. The GoDaddy logo is the dominant visual graphic. Icons are presented in a monochrome, outlined style (Midnight Ink #000000) with a standard stroke weight, serving purely functional and decorative purposes without additional color or dimension. There are no photographs, complex illustrations, or 3D renders; the visual emphasis is entirely on UI elements and typography.

## Custom Sections

### Agent Prompt Guide

primary action: no distinct CTA color

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513643277-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513643277-thumb.jpg |
