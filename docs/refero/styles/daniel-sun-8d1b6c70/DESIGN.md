# Daniel Sun — Refero Style

- Refero URL: https://styles.refero.design/style/8d1b6c70-e045-4ce6-891d-aba5d5c00e0d
- Site URL: https://danielsun.space
- ID: 8d1b6c70-e045-4ce6-891d-aba5d5c00e0d
- Theme: light
- Industry: agency
- Created: 2026-02-20T14:29:47.000Z
- Ranks: newest: 1156, popular: 515, trending: 977

> Solar Flare Canvas. A radiant yellow burst on a clean, stark white backdrop defines the visual energy.

## Description

This design system feels like a bold, sunny declaration. It pairs extreme typographic scale with a soft, limited color palette focused on vivid yellow and stark black and white. The visual identity hinges on the tension between playful handwritten accents and massive, condensed sans-serif headlines, creating a brand that feels both approachable and impactful.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sunbeam Yellow | #ffd500 | brand | Decorative elements, subtle highlights, active button indicators — a burst of vivid energy in an otherwise neutral palette. |
| Pitch Black | #000000 | neutral | Most prominent text color for headings and body, providing stark contrast against white backgrounds. |
| Canvas White | #ffffff | neutral | Primary page background, card surfaces, and text color on dark elements. |
| Pale Gray | #f5f5f5 | neutral | Secondary background color for sections and cards, providing a subtle differentiation from pure white. |
| Ash Gray | #808080 | neutral | Secondary text, descriptive elements. Offers softer contrast than Pitch Black, maintaining legibility. |
| Silver Mist | #a6a6a6 | neutral | Subtle text and borders, creating visual texture without distraction. |
| Shadow Gradient | #e6e6e6 | neutral | Background for subtle elevation or depth, usually found in larger UI sections or shadowed elements. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Reddit Sans Condensed | Bebas Neue | 900 | 36px, 88px, 246px | 0.90, 0.96, 1.00 | Dominant display font for headlines and impactful statements. Its condensed, ultra-bold presence with tight letter-spacing is a signature visual identity marker, creating strong, almost architectural text blocks. |
| Inter Display | Inter | 500 | 18px, 20px, 26px, 30px | 1.10, 1.30, 1.35 | Primary font for body text, subheadings, and medium-sized informational content. Its clarity and moderate weight provide a clean balance to the condensed headlines. |
| Inter | Inter | 500 | 14px, 20px, 128px | 1.20 | Used for smaller body text, captions, and occasionally for very large, specific type treatments. The tighter letter-spacing subtly adds to its readability in dense contexts. |
| sans-serif | system-ui, sans-serif | 400 | 12px | 1.20 | Utility font for the smallest text elements like tags, metadata, and default browser text. Its neutrality ensures it doesn't compete with brand fonts. |
| Caveat | Dancing Script | 700 | 18px, 28px | 0.96, 1.20 | Accent font for playful, humanistic touches, often used for dates or call-outs like 'from 2020 'til today'. Its handwritten feel provides a stark, warm contrast to the geometric sans-serifs. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.2 | -0.48 |
| body | 18 | 1.1 | -0.648 |
| subheading | 20 | 1.2 | -0.72 |
| heading | 30 | 1.35 |  |
| heading-lg | 36 | 0.9 | -2.628 |
| display | 88 | 0.96 | -2.992 |
| display-xl | 246 | 1 | -6.888 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "32px",
    "default": "14px",
    "heroElement": "110px",
    "largeImages": "24px"
  },
  "elementGap": "",
  "sectionGap": "64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Navigation Bar



### Work Showcase Card



### Button Group & CTA Strip



### Navigation Button

**Role:** Interactive element

Rounded button with rgba(255, 213, 0, 0.15) background, rgb(0, 0, 238) text color and border. Uses 32px border-radius, 6px vertical padding, 14px horizontal padding. The transparent yellow background with a blue border creates a subtle, interactive state contrasting a vivid yellow accent.

### Work Showcase Card

**Role:** Content display

Background is Pale Gray (#f5f5f5) or Canvas White (#ffffff). Features a drop shadow: rgba(0, 0, 0, 0.12) -2px 3px 3px 0px. Rounded corners at 14px. Inner content has padding of 16px. Imagery within may have 14px radius.

### Primary Heading (Sectional)

**Role:** Information hierarchy

Uses Reddit Sans Condensed, weight 900, size 36px, lineHeight 0.90, letterSpacing -2.628px. Color Pitch Black (#000000). Establishes major section titles with high impact.

### Sub-heading / Descriptor

**Role:** Contextual information

Uses Caveat, weight 700, size 18px, lineHeight 0.96, letterSpacing -0.648px. Color Ash Gray (#808080). Provides a warm, casual tone to introduce sections or add emphasis.

### Hero Display Text

**Role:** Brand statement

Uses Reddit Sans Condensed, weight 900, size 246px, lineHeight 1.00, letterSpacing -6.888px for 'Daniel Sun'. Pitch Black (#000000) text on Canvas White (#ffffff) background. The immense scale creates an immediate, unforgettable brand presence.

## Do's

- Use Reddit Sans Condensed (weight 900) for all main headlines and significant display text to maintain the strong, condensed visual identity.
- Pair the bold Reddit Sans Condensed with Inter Display (weight 500) for body text to ensure readability and balance.
- Introduce playful, handwritten elements using Caveat (weight 700) for dates, sub-headers like 'from 2020 'til today', or subtle accent text.
- Apply Sunbeam Yellow (#ffd500) sparingly as a vivid accent color, primarily for interactive elements or to draw attention to specific keywords.
- Maintain a predominantly Canvas White (#ffffff) and Pale Gray (#f5f5f5) background with Pitch Black (#000000) text for high contrast and readability.
- Use 32px border-radius for all primary buttons and interactive elements, giving them a distinct pill-like shape.
- Apply 14px border-radius consistently to all image containers and content cards (like Work Showcase Cards).

## Don'ts

- Do not use generic sans-serif fonts for headlines; always default to Reddit Sans Condensed for brand consistency.
- Avoid overusing Sunbeam Yellow (#ffd500); its impact comes from its scarcity and specific application.
- Do not introduce additional bold, condensed typefaces or calligraphic scripts; maintain the established font hierarchy.
- Avoid complex gradients beyond the subtle linear-gradient(rgb(230, 230, 230) 0%, rgb(166, 166, 166) 100%) for backgrounds.
- Do not use box-shadows other than rgba(0, 0, 0, 0.12) -2px 3px 3px 0px for element elevation.
- Do not introduce new border radii values; stick to 14px for cards/images and 32px for buttons.
- Avoid heavily stylized backgrounds or textures that detract from the clean canvas aesthetic.

## Layout

The page primarily uses a full-bleed design, allowing the striking yellow sunbeam graphic to dominate the initial viewport. Content sections generally appear centered but without a strict max-width, allowing for large-scale typography and images to stretch. The rhythm is characterized by distinct, vertically stacked sections, often alternating between stark white backgrounds and subtle Pale Gray (#f5f5f5). Content is arranged in prominent stacks of headline-level text, followed by descriptive copy and product showcases. There's a strong emphasis on spaciousness, with ample vertical padding between sections (implied by 'sectionGap' and general visual breaks).

## Imagery

The site uses a mix of photographic hero elements (the sunbeam graphic) and product screenshots within a clean UI. Photography is treated as a full-bleed background for the hero, creating an atmospheric backdrop. Product screenshots are contained within rounded (14px radius) card components, presented clearly with minimal embellishment, serving an explanatory and showcasing role. Icons are minimal, monochromatic, and likely part of a utility set, primarily functional rather than decorative. The overall density is balanced, with imagery serving as clear illustrative content contrasted against large type.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Exploits oversized, condensed typography for high impact and modern aesthetic. |
| Superside | Uses a similar approach of clean layouts with impactful, often colorful, hero sections with stark typography. |
| Frank Digital | Combines a minimalist aesthetic with a single strong accent color and bold, modern typefaces. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000 (Pitch Black)
- Background: #ffffff (Canvas White)
- Accent: #ffd500 (Sunbeam Yellow)
- Secondary Text: #808080 (Ash Gray)
- Button Background: rgba(255, 213, 0, 0.15)

### Example Component Prompts
1. Create a hero section: full-width, with a radial gradient from transparent to vivid yellow (representing 'Sunbeam Yellow') from the top-left corner as a background, fading to white on the right. Overlay this with a headline 'DANIEL SUN' (Reddit Sans Condensed, 246px, 900, #000000, letter-spacing -6.888px) centered vertically. Below it, add a sub-headline 'Howdy! Meet your trusted design partner,' (Inter Display, 30px, 500, #000000, 1.35 lineHeight) left-aligned.
2. Design a primary navigation button: 'Start project' text (Inter Display, 18px, 500, #0000ee - this blue is a browser default for links, so for brand consistency assume a dark neutral like #000000 unless specified). The button should have a background of rgba(255, 213, 0, 0.15), a 32px border-radius, and padding of 6px top/bottom, 14px left/right. The border should also be #0000ee (again, assume black as default unless clearly primary color).
3. Generate a 'work showcase' card: use Pale Gray (#f5f5f5) as the background with a 14px border-radius. Apply a box-shadow of rgba(0, 0, 0, 0.12) -2px 3px 3px 0px. Inside, add an image (14px border-radius) at the top, then 16px padding. Below the image, include a title 'Ruby' (Inter Display, 26px, 500, #000000), and a descriptor 'Branding, Web design, Development' (Inter Display, 18px, 500, #808080).
4. Create a section title: Start with a hand-written accent 'from 2020 'til today' (Caveat, 28px, 700, #808080, letter-spacing -1.008px). Below it, add a main heading 'MY LATEST WORK' (Reddit Sans Condensed, 36px, 900, #000000, letter-spacing -2.628px). Center both elements.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925594833-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925594833-thumb.jpg |
