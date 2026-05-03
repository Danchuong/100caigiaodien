# Ableton — Refero Style

- Refero URL: https://styles.refero.design/style/e5081033-bd79-479a-aef6-8b002df6086a
- Site URL: https://ableton.com
- ID: e5081033-bd79-479a-aef6-8b002df6086a
- Theme: light
- Industry: media
- Created: 2026-01-27T16:17:02.000Z
- Ranks: newest: 1267, popular: 530, trending: 1003

> High-contrast digital studio. A canvas of stark black and white, illuminated by electric blue.

## Description

This design system presents a digital canvas for creative tools, characterized by its stark, high-contrast monochrome base with strategic, vibrant accents. The primary palette of black and white, occasionally softened by light gray, is frequently punctuated by a singular, intense violet-blue. This creates an energetic, almost electric, feel, reflecting the dynamic nature of music production. Typography is assertive and direct yet uses a soft geometry, balancing instruction with visual appeal.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, borders, button text, iconic elements – provides strong legibility and defines structural outlines. |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, button backgrounds – the primary stage for all content. |
| Studio Gray | #eeeeee | neutral | Input field backgrounds, subtle background separations – provides minimal visual distinction in UI elements. |
| Electric Violet | #0000ff | brand | Interactive elements like navigation links, primary call-to-action buttons, active states – a high-energy focal point that signifies interaction and importance. |
| Melody Red | #ff8389 | accent | Categorization badges on content cards – a warm, vibrant accent for content taxonomy. |
| Synth Teal | #00d2be | accent | Categorization badges on content cards – a cool, energetic accent for content taxonomy. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| futura-pt | Futura | 400, 700 | 14px, 16px, 20px, 24px, 30px, 40px, 90px | 1.00, 1.20, 1.40, 1.50 | The primary typeface for all content, from headings to body text and interactive elements. Its geometric forms provide a technical yet approachable feel, integral to the brand's identity creating a forward-thinking aesthetic. |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "69px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Blog Post Card Grid



### Category Tag Collection



### CTA Banner with Input



### Primary Call-to-Action Button

**Role:** Action

Solid Electric Violet background (#0000ff) with Canvas White text (#ffffff), no border-radius, 7px vertical and 30px horizontal padding. Font is futura-pt 400.

### Category Tag Button - Melody Red

**Role:** Categorization

Solid Melody Red background (#ff8389) with Midnight Ink text (#000000), no border-radius, 1.96px vertical and 11.9px horizontal padding. Font is futura-pt 400.

### Category Tag Button - Synth Teal

**Role:** Categorization

Solid Synth Teal background (#00d2be) with Midnight Ink text (#000000), no border-radius, 1.96px vertical and 11.9px horizontal padding. Font is futura-pt 400.

### Ghost Button

**Role:** Secondary action

Transparent background, Midnight Ink text (#000000), no border-radius or visible padding, typically used for inline actions.

### Basic Card

**Role:** Content container

Transparent background, no border-radius, no box shadow, 0px padding. Acts as a structural grouping without adding visual weight.

### Input Field

**Role:** Form Element

Studio Gray background (#eeeeee) with Midnight Ink text (#000000), no border-radius, 8px vertical and 15px horizontal padding. Font is futura-pt 400.

### Navigation Link

**Role:** Navigation

Midnight Ink text (#000000) for unselected state, Electric Violet (#0000ff) for active/hover state. Font is futura-pt 400, 16px. No specific padding detected, relies on element spacing.

### Hero Headline

**Role:** Primary heading

Midnight Ink text (#000000), futura-pt 700 at 90px size, line-height 1.0. Used for dominant page titles capturing immediate attention.

## Do's

- Use Midnight Ink (#000000) for all primary text elements to ensure high contrast.
- Apply Canvas White (#ffffff) as the default background for content sections.
- Utilize Electric Violet (#0000ff) exclusively for primary interactive elements, such as CTA buttons and active navigation links, to draw attention.
- Maintain a consistent `0px` border-radius across all buttons, cards, and input fields for a sharp, unyielding aesthetic.
- Employ futura-pt throughout the UI, with variations in weight and size to create hierarchy while retaining brand consistency.
- Maintain minimal vertical padding of 1.96px for utility tags with a vibrant background and 7px for primary action buttons.

## Don'ts

- Avoid using drop shadows or complex gradients; the aesthetic relies on flat, high-contrast surfaces.
- Do not introduce additional rounded corners beyond `0px`; sharp edges are a defining characteristic.
- Do not deviate from the futura-pt typeface; alternative fonts will dilute the brand's typographic identity.
- Refrain from using Electric Violet (#0000ff) for purely decorative elements; reserve it for interactive or highlight states.
- Do not use background colors other than Canvas White (#ffffff) or Studio Gray (#eeeeee) for primary content containers; chromatic colors are for accents only.
- Avoid excessive spacing between elements; a comfortable but not overly sparse density is preferred, often using `10px` element gaps.

## Layout

The page exhibits a mix of full-bleed and constrained content. The hero section is full-bleed, showcasing a product shot with a large, centered headline. Subsequent sections often feature a `1200px` max-width centered container, breaking into two-column layouts with text on one side and a corresponding image or nested content cards on the other. Vertical rhythm is established through consistent section gaps, maintaining a comfortable density. Navigation is a sticky top bar, providing persistent access to key tools. Content is arranged to present information in visually digestible blocks, often in grids of 3, keeping visual clutter to a minimum and emphasizing direct interaction with media and text.

## Imagery

The visual language is utilitarian and product-focused, featuring tight shots of hardware and software interfaces. Photography often captures studio environments or creative practitioners interacting with Ableton's tools, lending an authentic, creator-centric feel. Treatments are generally full-bleed or contained within sharp-edged containers, with a raw, unpolished quality that suggests real-world usage rather than glossy abstraction. Icons are monochrome, often Midnight Ink on Canvas White backgrounds, with a clear, outlined style that complements the geometric typography. Imagery serves primarily to showcase the product's functionality and its place in the creative process, blending seamlessly with the high-contrast UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Native Instruments | Dominance of black and white surfaces with strategic, often single-color, high-contrast accents, and sharp UI elements. |
| Teenage Engineering | Minimalist aesthetic with a focus on geometric forms, high contrast, and a 'tool-like' functional visual identity. |
| Splice | Clean, modern UI that leverages a restricted color palette for clarity, punctuated by bright, functional accent colors. |
| Bitwig Studio | Dark UI elements combined with clean lines and occasional vibrant color indicators for functions, reflecting a technical software interface. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text: #000000 (Midnight Ink)
- Background: #ffffff (Canvas White)
- CTA: #0000ff (Electric Violet)
- Border: #000000 (Midnight Ink - where applicable)
- Accent: #ff8389 (Melody Red)

**3-5 Example Component Prompts:**
1. Create a primary call-to-action button: background #0000ff, text #ffffff, futura-pt 400 16px, padding 7px 30px, border-radius 0px, text 'Try Live 12 free'.
2. Design a content card: transparent background, 0px border-radius, no shadow. Above the content, place a category tag: background #ff8389, text #000000, futura-pt 400 14px, padding 1.96px 11.9px, text 'Downloads'.
3. Generate a primary heading: text #000000, futura-pt 700 90px, line-height 1.0, text 'Rent-to-own – now available for all upgrades'.
4. Create an input field: background #eeeeee, text #000000, futura-pt 400 16px, padding 8px 15px, border-radius 0px, placeholder text 'Search...'.
5. Implement a navigation link: text #000000, futura-pt 400 16px, on hover/active change text to #0000ff, text 'Shop'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924774685-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924774685-thumb.jpg |
