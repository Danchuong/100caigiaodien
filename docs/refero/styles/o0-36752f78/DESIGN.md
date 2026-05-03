# O0 — Refero Style

- Refero URL: https://styles.refero.design/style/36752f78-1c43-471b-b125-e82152ad23dd
- Site URL: https://www.ozero.design
- ID: 36752f78-1c43-471b-b125-e82152ad23dd
- Theme: light
- Industry: design
- Created: 2026-04-30T01:39:34.964Z
- Ranks: newest: 551, popular: 766, trending: 626

> gallery wall contrast

## Description

O0 establishes a commanding, minimalist aesthetic through stark black and white contrasts and oversized, serif typography for headlines. The interaction is focused on content, with a high degree of content density. The system relies on precise typographic interplay and generous negative space to convey a sense of modern authority, using a light theme with occasional inverse dark sections for dramatic effect. Components are typically ghosted or outlined, allowing content to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Black | #000000 | neutral | Primary text, headline text, content backgrounds in inverted sections, borders, icons. Creates a stark, authoritative contrast |
| Canvas White | #ffffff | neutral | Primary page background, text on dark backgrounds, borders, icons. Provides a bright, expansive base for content |
| Cloud Mist | #f2f2f2 | neutral | Subtle background for UI sections, offering a slight visual break from pure white. Used for alternating section backgrounds |
| Pale Ash | #e8e9ea | neutral | Secondary background for card surfaces or distinct content blocks, providing minimal differentiation |
| Stone Gray | #cecdcb | neutral | Background for minor interactive elements or subtle dividers. A slightly darker neutral for lower emphasis UI elements |
| Yellow Accent | #ffe500 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400 | 48px, 52px, 54px, 64px, 66px, 79px, 88px | 0.90, 1.00 | Primary headlines and display text. The serif typeface at large sizes provides a classic, upscale feel, while the tight line height maximizes visual impact. |
| Arial | Arial | 400 | 16px, 20px | 1.15, 1.20, 1.22, 1.25, 1.44, 1.50 | Navigation, body text, and descriptive labels. The sans-serif provides clear readability and a modern counterpoint to the serif headlines. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.5 |  |
| body-lg | 20 | 1.25 |  |
| heading-sm | 48 | 1 |  |
| heading | 52 | 1 |  |
| heading-lg | 54 | 1 |  |
| display | 64 | 0.9 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "60px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Link

**Role:** Navigation item

Text link with no background or padding, using Arial 400 at 16px, Midnight Black text color. Interacts purely through text.

### Ghost Button

**Role:** Call to action

A button with no background, no padding, and a 0px border-radius, using #000000 text. Appears as a textual link but functions as an interactive button.

### Client Logo Grid Item

**Role:** Static display

Grid item for client logos, visually contained mostly by implicit spacing, sometimes within a Cloud Mist background section.

### Section Divider (Subtle)

**Role:** Visual separation

Implicit divider based on background color changes, such as between Canvas White and Cloud Mist sections, or a 2px solid border using a neutral color (not explicitly specified by usage but common practice for borders).

### Primary Heading (Times)

**Role:** Hero headline

Large serif text using Times 400, ranging from 48px to 88px, with tight line heights (0.9 to 1.0) and Midnight Black color. Dominates the visual hierarchy.

### Body Text (Arial)

**Role:** Descriptive content

Standard readable text using Arial 400 at 16px or 20px, typically in Midnight Black, with generous line heights for readability.

## Do's

- Prioritize stark black and white contrasts for all primary interactive and textual elements using #000000 and #ffffff.
- Use Times 400 for all headlines and display text, selecting appropriate sizes from the established scale (48-88px) with tight line heights (0.9-1.0).
- Apply Arial 400 for all body text, navigation, and labels, at 16px or 20px, with line heights tuned for readability (1.15-1.5).
- Maintain a compact element spacing of 10px where interaction requires proximity without visual clutter.
- Establish clear section breaks using large vertical gaps (60px) or by alternating background colors between Canvas White and Cloud Mist.
- Utilize ghosted or text-only buttons and interactive elements, relying on color changes for hover states rather than filled backgrounds.
- Keep all border-radii at 0px to uphold a sharp, angular aesthetic across UI elements.

## Don'ts

- Avoid using saturated colors for backgrounds or primary interactive elements; color should be used sparingly for decorative accents only.
- Do not introduce soft shadows or rounded corners, as the system relies on flat surfaces and sharp edges.
- Do not deviate from the strict typographic pairing of Times for headlines and Arial for body text; avoid using other fonts or weights.
- Refrain from dense layouts where large section gaps (60px) are intended to create breathing room.
- Do not use background colors with high saturation or significant chromaticity for any functional UI element.
- Avoid decorative gradients or complex visual textures; the system thrives on minimalism and solid color blocks.
- Do not allow internal element padding to grow beyond 10px, as the system emphasizes content density.

## Layout

The page primarily uses a full-bleed layout for hero sections and some content blocks, transitioning to a contained max-width structure implicitly defined by content alignment. The hero section often features a large, centered headline on a vast white canvas. Sections alternate between pure white, subtle Cloud Mist backgrounds, and dramatic full-bleed Midnight Black blocks. Content is arranged in prominent center-aligned stacks or two-column layouts, with text sometimes on one side and imagery or whitespace on the other. Navigation is a simple top-right floating text menu, maintaining a clean header. Grid usage is subtle, hinted at by client logos and portfolio showcases.

## Imagery

The visual language focuses on high-quality product photography, often tightly cropped and presented on pure white or stark black backgrounds, sometimes full-bleed with minimal context beyond the product itself. Illustrations are likely minimalist, possibly geometric or outlined, used for abstract concepts rather than decorative flourishes. Iconography is clean and outlined, maintaining the system's overall stark and functional feel. Imagery serves primarily to showcase products and services directly, acting as explanatory content rather than atmospheric decoration. The density is image-heavy in portfolio sections, but balanced with significant negative space around key visual elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a reliance on clean typography, abundant whitespace, and a high-contrast black/white aesthetic for a serious, functional presentation. |
| Linear | Exhibits similar compact text-driven UI, strong minimal contrasts, and a focus on content hierarchy over decorative elements. |
| Apple (services pages) | Utilizes large, impactful typography, high-quality product imagery on minimal backgrounds, and a disciplined color palette centered on neutrals. |
| Pitch | Adopts a high-contrast, minimalist design with a strong typographic presence and a focus on clean content presentation over elaborate UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #ffe500
primary action: no distinct CTA color

Example Component Prompts:
Create a Hero Section: full-bleed background #ffffff. Centered headline 'Full-stack cloud design studio' using Times 400 at 88px, #000000. No other elements.
Create a Client Logo Grid: Background #f2f2f2. A 60px section gap above and below. Grid of client logos (placeholders if needed) with 60px column and row gaps. Each logo container is 0px radius.
Create a Testimonial Block: Background #000000. Text for quote '“You absolutely smashed this. You knocked it out of the park.”' using Arial 400 at 20px, #ffffff. Below, 'Chris Palazzo, Creative Director' using Arial 400 at 16px, #ffffff. Padding of 40px around all text.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513154130-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513154130-thumb.jpg |
