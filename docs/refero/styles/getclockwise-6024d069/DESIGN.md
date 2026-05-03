# Getclockwise — Refero Style

- Refero URL: https://styles.refero.design/style/6024d069-8a74-4534-917f-5f5b11224cc5
- Site URL: https://www.getclockwise.com
- ID: 6024d069-8a74-4534-917f-5f5b11224cc5
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:42:37.937Z
- Ranks: newest: 721, popular: 1173, trending: 1130

> Evergreen clarity on a clean slate

## Description

Clockwise employs a crisp, professional visual system with a bright canvas and strong green branding. Text is highly structured, using a custom display font for headlines and a clear sans-serif for body content. Borders are prominent, acting as dividers and enclosures, while color accents are used sparingly for links and interactive elements, maintaining an airy yet authoritative feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fdf9f7 | neutral | Page background, primary surface for content blocks |
| Midnight Pine | #003f2e | brand | Primary text, major headlines, brand elements, and prominent borders for content sections. Establishes a deep, grounded presence |
| Forest Link | #039861 | accent | Interactive text links, decorative accents, and outlines for ghost buttons or interactive states. A vivid green for functional highlights |
| Slate Text | #333333 | neutral | Secondary text for paragraphs and descriptive content, offering strong contrast on light backgrounds |
| Ash Gray | #6e7673 | neutral | Muted text for subheadings and informational cues, borders for less prominent components |
| Steel Border | #a6a6a6 | neutral | Hairline borders for dividers and subtle content segregation |
| Light Gray Border | #d6d6d6 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PP Mori | Montserrat | 600, 700 | 23px, 52px, 64px, 66px | 0.95, 1.00, 1.10, 1.20 | Display headlines and hero text. The condensed, strong presence of PP Mori at higher weights anchors the page and communicates authority. Its unique character distinguishes the brand's voice without being overly decorative. |
| Inter | Inter | 400, 500, 700 | 16px, 18px, 20px, 23px, 24px | 1.30, 1.40 | Primary text for body, links, lists, and secondary headings. Inter provides high legibility and a neutral, professional tone, complementing the distinctiveness of PP Mori without competing with it. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 16 | 1.4 | -0.48 |
| body | 18 | 1.4 | -0.54 |
| subheading | 20 | 1.3 | -0.6 |
| heading-sm | 23 | 1.2 | -0.69 |
| heading | 52 | 1 |  |
| heading-lg | 64 | 0.95 |  |
| display | 66 | 0.95 |  |

## Spacing & Shape

```json
{
  "radius": {
    "soft": "800px",
    "circular": "9999px"
  },
  "elementGap": "20px",
  "sectionGap": "32px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Headline

**Role:** Dominant page titles and hero content.

Uses PP Mori, weight 700, size 66px, lineHeight 0.95, color Midnight Pine (#003f2e).

### Section Heading

**Role:** Titles for major content sections, establishing hierarchy.

Uses PP Mori, weight 600, size 52px, lineHeight 1.0, color Midnight Pine (#003f2e).

### Body Text Paragraph

**Role:** Standard paragraph content for readability.

Uses Inter, weight 400, size 18px, lineHeight 1.4, letterSpacing -0.0300em, color Slate Text (#333333).

### Muted Subheading

**Role:** Descriptive text under headlines or for secondary information.

Uses Inter, weight 400, size 20px, lineHeight 1.3, letterSpacing -0.0300em, color Ash Gray (#6e7673).

### Link Text

**Role:** Hyperlinks within body copy or navigation.

Uses Inter, weight 400, size 16px, lineHeight 1.4, letterSpacing -0.0300em, color Forest Link (#039861).

### FAQ Section Divider

**Role:** Visual separator for question groups in an FAQ.

A 3px solid border in Light Gray Border (#d6d6d6) spanning full width, positioned below a heading.

### FAQ Accordion Item

**Role:** Interactive question and answer section.

Clickable heading (Inter, weight 700, size 23px, color Midnight Pine #003f2e) with a circular '+' icon (color Forest Link #039861) on one side, and a 3px solid border in Light Gray Border (#d6d6d6) on the bottom.

### Stat Card

**Role:** Highlighting key numerical achievements.

Large number (PP Mori, weight 600, size 64px, color Midnight Pine #003f2e) with descriptive text below (Inter, weight 400, size 18px, color Ash Gray #6e7673, lineHeight 1.4). No explicit borders, relies on surrounding negative space.

## Do's

- Prioritize PP Mori for all headlines and display text, leveraging its strong character at larger sizes.
- Use Midnight Pine (#003f2e) for primary text content to maintain strong contrast and brand presence.
- Apply Forest Link (#039861) exclusively for active links and interactive elements, ensuring its vibrancy draws attention.
- Employ Light Gray Border (#d6d6d6) and Steel Border (#a6a6a6) for functional dividers and UI element outlines, using 3px solid for major sections and 1px solid for subtle distinctions.
- Maintain generous vertical spacing between sections (32px to 64px) to emphasize clarity and airiness.
- Utilize the `circular` (9999px) and `soft` (800px) radii for all interactive elements and badges, to convey a friendly tangibility.
- Ensure all body text uses Inter with -0.0300em letter spacing for enhanced readability on screen.

## Don'ts

- Avoid using saturated colors other than Forest Link (#039861) on interactive elements.
- Never use generic rectangular buttons; all buttons must adopt the `circular` (9999px) or `soft` (800px) radius.
- Do not introduce new serif fonts; the system relies on the distinct contrast between PP Mori and Inter.
- Avoid heavy drop shadows or complex gradients; the system prefers a flat, border-driven aesthetic.
- Do not deviate from the established text colors; use Midnight Pine (#003f2e), Slate Text (#333333), and Ash Gray (#6e7673) only for their designated roles.
- Refrain from using tight line spacing; maintain the established line heights (1.3-1.4) for all body copy to prevent text density.
- Do not use accent colors for large background areas; reserve them for small, functional UI elements.

## Layout

The page follows a classic max-width contained layout, likely centered, though specific max-width is not provided. The hero section presents a large, centered headline followed by a descriptive subtitle. Content is arranged in a single-column flow with consistent vertical spacing between paragraphs and sections. The FAQ section uses a clear question-and-answer format, bordered for distinction. Towards the bottom, there's a multi-column grid for partner logos, and a two-column grid for numerical stats, indicating a balanced use of white space and structured content blocks. The navigation is a simple top bar with a logo.

## Imagery

The site uses minimal imagery, primarily focusing on its logo and a grid of partner logos that are presented in a monochrome, desaturated style to maintain visual harmony. There are no full-bleed photographs or illustrations. Icons, like the plus/minus in the FAQ, are simple, outlined, and monochromatic, with a prominent stroke weight, and use the accent green for interactive states. The overall density of imagery is low, with text dominating the visual space and acting as the primary carrier of information.

## Similar Brands

| Business | Why |
| --- | --- |
| Calendly | Clean, calendar-focused, minimal color use with a dominant accent green for functionality. |
| Notion | Strong emphasis on structured text, clear typography hierarchy, and subtle borders for content organization. |
| linear.app | Highly structured information display, subtle use of branding colors for interactive elements, and a focus on content hierarchy over heavy visual design. |
| Superhuman | Fast, UI-centric design with crisp typography and restrained color usage primarily for functional cues. |

## Custom Sections

### Agent Prompt Guide

Create an Outlined Primary Action: Transparent background, #039861 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

Example Component Prompts:
Create a hero section: background Canvas White (#fdf9f7). Headline 'Our Next Chapter' using PP Mori weight 700, 66px, lineHeight 0.95, color Midnight Pine (#003f2e). Subtitle 'A new chapter for our team, and an important update for our customers.' using Inter weight 400, 20px, lineHeight 1.3, letter-spacing -0.6px, color Ash Gray (#6e7673).
Create an FAQ accordion item: Title 'How will the events on my calendar be impacted when the Clockwise services end?' using Inter weight 700, 23px, lineHeight 1.2, letter-spacing -0.69px, color Midnight Pine (#003f2e). Plus icon should be outlined, color Forest Link (#039861). Bottom border 3px solid Light Gray Border (#d6d6d6).
Create a stat card: Large number '8 million' using PP Mori weight 600, 64px, lineHeight 0.95, color Midnight Pine (#003f2e). Descriptive text 'hours of Focus Time created' using Inter weight 400, 18px, lineHeight 1.4, letter-spacing -0.54px, color Ash Gray (#6e7673).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509736870-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509736870-thumb.jpg |
